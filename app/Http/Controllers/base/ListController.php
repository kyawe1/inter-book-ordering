<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pdf_Books;

class ListController extends Controller
{
    function index()
    {
        $list = Pdf_Books::all();
        return view('basic.list', ['list' => $list]);
    }
    function find_view(Request $r)
    {
        $key = $r->post('name');
        $list = Pdf_Books::where('name', 'like', "$key%")->get();
        return view('basic.list', ['list' => $list]);
    }
}
