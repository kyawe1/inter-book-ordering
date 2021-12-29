@extends('base')
@section('title')
    Register
@endsection
@section('body')
    <div class='container d-block m-auto w-75'>
        <form method='post'>
            @csrf
            <div class='d-block m-auto'>
                <label for='username' class='form-label'>UserName</label>
                <input type='text' id='username' name='name' placeholder="username" class='form-control'>
            </div>
            <div class='d-block m-auto'>
                <label for='Email' class='form-label'>Email</label>
                <input type='email' id='Email' name='email' placeholder="Email" class='form-control'>
            </div>
            <div class='d-block m-auto'>
                <label for='Password' class='form-label'>Password</label>
                <input type='password' id='Password' name='password' placeholder="Password" class='form-control'>
            </div>
            <div class='d-block m-auto'>
                <label for='RePassword' class='form-label'>Confirm Password</label>
                <input type='password' id='RePassword' name='repassword' placeholder="Confirm Password" class='form-control'>
            </div>
            <div class='d-block m-auto'>
                <input type='submit' class='btn btn-primary w-50' value='register'>
            </div>
        </form>
    </div>
@endsection