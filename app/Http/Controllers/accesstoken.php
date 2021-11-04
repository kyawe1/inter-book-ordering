<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class accesstoken extends Controller
{
    function rules()
    {
        return [
            'password' => 'required|string|min:8|same:password',
            'name' => 'required|string'
        ];
    }
    function login(Request $request)
    {
        $validated_data = $request->validate($this->rules());
        if (Auth::attempt($validated_data, false)) {
            $user = Auth::user();
            $token['user'] = $user->createToken('KyawEarinGoodlg#11#$45^')->plaintextToken;
            return response()->json(
                [
                    'status' => 'success',
                    'data' => $token,
                    'message' => 'success'
                ]
            );
        }
    }
    function register(Request $request)
    {
        $validated_data = $request->validate($this->rules());
        
    }
}
