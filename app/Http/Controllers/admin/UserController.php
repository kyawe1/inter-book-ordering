<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth']);
    }
    function list()
    {
        $list = User::all();
        $column=[
            'name',
            'email',
            'password',
            'role'
        ];
        return view('admin.users.list', ['column'=>$column,'list' => $list]);
    }
    function ban(User $user)
    {
        $user->ban = True;
        return redirect(route('admin.list_user'));
    }
}
