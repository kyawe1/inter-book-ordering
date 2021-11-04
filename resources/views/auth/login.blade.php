@extends('base')
@section('title')
    Login
@endsection
@section('body')
    <div class='container d-block m-auto w-75'>
        <form method='post' class='d-block m-auto w-50 lh-base'>
            @csrf
            <div>
                <label for='username'>UserName</label>
                <input type='text' id='username' name='name' placeholder="username">
            </div>
            <div>
                <label for='Password'>Password</label>
                <input type='password' id='Password' name='password' placeholder="Password">
            </div>
            <div>
                <input type='submit' class='btn btn-primary w-75'>
            </div>
        </form>
    </div>
@endsection