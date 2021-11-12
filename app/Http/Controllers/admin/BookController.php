<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Pdf_Books;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    private Storage $s;
    public function __construct(Storage $s)
    {
        $this->s=$s;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $column = [
            'name',
            'ISBN_Number',
            'author_name',
            'edition',
            'Details',
            'published_date',
        ];
        $list=Pdf_Books::latest()->get();
        
        return view('admin/list', ['column' => $column,'list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ls=Publisher::all();
        return view('admin/create_forms/bookForm',['list'=>$ls,'obj'=>null]);
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
        // ddd($validated_data['image']->getClientOriginalName());
        $validated_data['image']=$validated_data['image']->storeAs('/public/coverphotos',$validated_data['image']->getClientOriginalName());
        $validated_data['published_date'] = Carbon::createFromFormat('d/m/Y', $validated_data['published_date']);
        
        $obj = new Pdf_Books($validated_data);
        $obj->set_slug();
        $obj->save();
        return redirect(route('admin.home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pdf_Books  $pdf_Books
     * @return \Illuminate\Http\Response
     */
    public function show(Pdf_Books $pdf_Books)
    {
        return view('admin.detail', ['obj' => $pdf_Books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pdf_Books  $pdf_Books
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdf_Books $pdf_Books)
    {
        $ls=Publisher::all();
        return view('admin.create_forms.bookForm', ['obj' => $pdf_Books,'list'=>$ls]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pdf_Books  $pdf_Books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdf_Books $pdf_Books)
    {
        $pdf_Books->update(request()->validate($this->rules()));
        return redirect('admin/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdf_Books  $pdf_Books
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $validated_data=request()->validate(
            [
                'delete_id'=>'array'
            ]
        );
        foreach($validated_data as $a){
            $obj=Pdf_Books::find($a)->first();
            $obj->delete();
        }
        return response()->json([
            'state'=>'success',
            'message'=>'compeleted'
        ]);
    }
    private function rules()
    {
        return [
            'name' => 'string|required',
            'ISBN_Number' => 'string|required',
            'author_name' => 'string|required',
            'edition' => 'string|required',
            'Details' => 'string|required|max:400',
            'published_date' => 'string',
            'image'=>'file|nullable',
            'publish_id'=>'integer|required'
        ];
    }
}
