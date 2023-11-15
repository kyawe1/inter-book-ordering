<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        return view('auth.login');
    }
    function rules(){
        return [
            'password'=>'required|string|min:8',
            'name'=>'required|string'
        ];
    }
    function login_process(){
        $validated_data=request()->validate($this->rules());
        if (Auth::attempt($validated_data,remember: false)){
            return redirect(route('home'));
        }
        return back();
    }
}
