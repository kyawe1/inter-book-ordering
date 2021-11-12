<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Pdf_Books, Borrow};

class DetailController extends Controller
{
    function index(Pdf_Books $p)
    {
        $boo = null;
        if (Auth::check()) {
            $arr = session('borrow_books');
            $arr1 = Borrow::where('user', '=', request()->user()->id);
            $temp_obj = $this->search($p, $arr1);
            $boo = $this->check($p, $arr, $temp_obj);
        }
        return view('basic.detail', ['obj' => $p, 'boo' => $boo]);
    }
    function check(Pdf_Books $p, array|null $arr, $temp)
    {
        if ($arr) {
            if (array_search($p, $arr) || $temp) {
                return true;
            }
        }
        return false;
    }
    function search(Pdf_Books $p, $arr1)
    {
        foreach ($arr1 as $a) {
            if ($a->book->where('id', '=', $p->id)) {
                return true;
            }
        }
        return false;
    }
}
