<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('basic.home');
    }
}
