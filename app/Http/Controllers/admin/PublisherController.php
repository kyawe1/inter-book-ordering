<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = [
            'name',
            'address',
            'contact_number',
            'email',
            'ban'
        ];
        $list=Publisher::latest()->get();
        return view('admin/list',[
            'column'=>$columns,
            'list'=>$list
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_forms/publisherForm',['obj'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = request()->validate($this->rules());
        $validated_data['ban'] = false;
        $obj = Publisher::create($validated_data);

        $obj->save();
        return redirect(route('admin.home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        return view('admin.detail', ['obj' => $publisher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        return view('admin.create_forms.publisherForm', ['obj' => $publisher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
    {
        $publisher->update(request()->all());
        return redirect('admin/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        $validated_data=request()->validate(
            [
                'delete_id'=>'array'
            ]
        );
        foreach($validated_data as $a){
            $obj=Publisher::find($a)->first();
            $obj->delete();
        }
        return response()->json([
            'state'=>'success',
            'message'=>'compeleted'
        ]);
    }
    private function rules(){
        return [
            'name' => 'string|required',
            'address' => 'string|required',
            'contact_number' => 'string|required',
            'email' => 'string|required|email',
        ];
    }
}
