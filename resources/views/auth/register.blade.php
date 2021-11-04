@extends('base')
@section('title')
    Register
@endsection
@section('body')
    <div class='container d-block m-auto w-75'>
        <form method='post'>
            @csrf
            <div class='d-block m-auto'>
                <label for='username'>UserName</label>
                <input type='text' id='username' name='name' placeholder="username">
            </div>
            <div class='d-block m-auto'>
                <label for='Email'>Email</label>
                <input type='email' id='Email' name='email' placeholder="Email">
            </div>
            <div class='d-block m-auto'>
                <label for='Password'>Password</label>
                <input type='password' id='Password' name='password' placeholder="Password">
            </div>
            <div class='d-block m-auto'>
                <label for='RePassword'>Confirm Password</label>
                <input type='password' id='RePassword' name='repassword' placeholder="Confirm Password">
            </div>
            <div class='d-block m-auto'>
                <input type='submit' class='btn btn-primary w-50'>
            </div>
        </form>
    </div>
@endsection