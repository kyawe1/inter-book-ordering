<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller{
    function index(){
        Auth::logoutCurrentDevice();
        return redirect(route('home'));
    }
}