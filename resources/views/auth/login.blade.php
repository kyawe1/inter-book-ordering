@extends('base')
@section('title')
    Login
@endsection
@section('body')
    <div class='container d-block m-auto w-75 p-2'>
        <form method='post' class='d-block m-auto w-50 lh-base'>
            @csrf
            <div>
                <label for='username' class="form-label">UserName</label>
                <input type='text' id='username' name='name' placeholder="username" class='form-control'>
            </div>
            <div>
                <label for='Password' class="form-label">Password</label>
                <input type='password' id='Password' name='password' placeholder="Password" class='form-control'>
            </div>
            <div>
                <input type='submit' class='btn btn-primary w-75' value="login">
            </div>
        </form>
    </div>
@endsection