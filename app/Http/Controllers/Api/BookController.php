<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\pdf_books as ResourcesPdf_books;
use Illuminate\Http\Request;
use App\Models\Pdf_Books;

class BookController extends Controller
{
    public function index()
    {
        $list = Pdf_Books::all();
        return response()->json(
            [
                'status'=>'success',
                'data'=>ResourcesPdf_books::collection($list),
                'message'=>'finished'  
            ]
        );
    }
    public function detail(Pdf_Books $id)
    {
        // $obj = Pdf_Books::findOrFail($id);
        return response()->json([
            'status'=>'success',
            'data'=>new ResourcesPdf_books($id),
            'message'=>'finished'
        ]);
    }
}
