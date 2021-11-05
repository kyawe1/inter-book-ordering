<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book_Category;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $column = [
            'category_id',
            'book_id',
        ];
        $list=Book_Category::latest()->get();
        return view('admin/list', ['column' => $column,'list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_forms/bookCategoryForm');
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
        $obj = Book_Category::create($validated_data);
        $obj->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book_Category  $book_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Book_Category $book_Category)
    {
        return view('admin.detail', ['obj' => $book_Category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book_Category  $book_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Book_Category $book_Category)
    {
        return view('admin.create_forms.bookcategoryForm', ['obj' => $book_Category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book_Category  $book_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book_Category $book_Category)
    {
        $book_Category->update($this->rules());
        return redirect('admin/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book_Category  $book_Category
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
            $obj=Book_Category::find($a)->first();
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
            'category_id' => 'integer|required',
            'book_id' => 'integer|required'
        ];
    }
}
