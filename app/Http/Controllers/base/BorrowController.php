<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use App\Models\Pdf_Books;
use App\Models\Borrow;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class BorrowController extends Controller
{
    function list()
    {
        $list = Borrow::all();
        $l = session('borrow_books');
        return view('basic.borrow_list', ['list' => $list, 'borrow' => $l]);
    }
    function create(Pdf_Books $p)
    {
        $arr = session('borrow_books');
        if (!$arr) {
            $arr = [
                $p
            ];
            session(['borrow_books' => $arr]);
        }
        array_push($arr, $p);
        session(['borrow_books' => $arr]);
        return redirect(route('detail' , $p->id));
    }
    function store()
    {
        $validated = $this->valid_data();
        $a=session('borrow_books');
        foreach ($a as $i) {
            $validated['book_id'] = $i->id;
            $n = Borrow::create($validated);
            $n->save();
        }
        session(['borrow_books' => null]);
        return redirect(route('borrow-list'));
    }
    function remove(Borrow $b)
    {
        if (request()->user()->can('delete', $b)) {
            dd($b->delete());
            return "Success";
        }
        return 'FAiled';
    }
    function valid_data()
    {
        return [
            'user_id' => request()->user()->id,
            'end_of_date' => new \DateTime()
        ];
    }
    function soft_delete(Pdf_Books $p){
        $a=session('borrow_books');
        if (!(is_null($a))){
            unset($a[array_search($p,$a)]);
            session(['borrow_books'=>$a]);
            return redirect(route('detail',$p->id));
        }
    }
    function force_delete(Pdf_Books $p){
        session(['borrow_books'=>null]);
    }
}
