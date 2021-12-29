<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Events\UserCreatedEvent;

class RegisterController extends Controller
{
    function index()
    {
        return view('auth.register');
    }
    function rules()
    {
        return [
            'name' => 'required|string',
            'repassword' => 'required|string|min:8',
            'password' => 'required|string|min:8|same:password',
            'email' => 'required|email|string'
        ];
    }
    function register_process()
    {
        $validated_data=request()->validate($this->rules());
        $user=User::create($validated_data);
        $user->setpassword();
        $user->save();
        // UserCreatedEvent::dispatch($user);
        return redirect(route('auth.login'));
    }
}
