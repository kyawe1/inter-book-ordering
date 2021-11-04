<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pdf_Books;

class DetailController extends Controller
{
    function index(Pdf_Books $p)
    {
        return view('basic.detail', ['obj' => $p]);
    }
}
