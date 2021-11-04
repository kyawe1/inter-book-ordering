<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use App\Models\Pdf_Books;
use App\Models\Borrow;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class BorrowController extends Controller
{
    function list(){
        $list=Borrow::all();
        return view('basic.borrow_list',['list'=>$list]);
    }
    function store(Pdf_Books $p){
        
        $validated=[
            'user_id'=> request()->user()->id,
            'book_id'=>$p->id,
            'end_of_date'=>new \DateTime()
        ];
        $n=Borrow::create($validated);
        $n->save();
        return "Borrowed successfully";
    }
    function remove(Borrow $b){
        if (request()->user()->can('delete',$b)){
            dd($b->delete());
            return "Success";
        }
        return 'FAiled';
    }
}
