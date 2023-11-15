@extends('base')
@section('title')
Login
@endsection
@section('body')
<div class='container d-block m-auto vh-100 mt-3 p-2'>
    <form method='post'
        class='d-block m-auto w-50 h-75 lh-lg card card-body  position-absolute top-0 start-0 end-0 bottom-0'>
        <div class='p-5 h1 lh- text-center'>
            Welcome From AAA Batteries
        </div>
        @csrf
        <div>
            <label for='username' class="form-label">UserName</label>
            <input type='text' id='username' name='name' placeholder="username" class='form-control'
                value='{{old("name")}}'>
            <div class="h6 text-danger">{{$errors->first('name')}}</div>
        </div>
        <div>
            <label for='Password' class="form-label">Password</label>
            <input type='password' id='Password' name='password' placeholder="Password" class='form-control'
                value='{{old("password")}}'>
            <div class='h6 text-danger'>{{$errors->first('password')}}
            </div>
            <div class="w-75 mx-auto">
                <input type='submit' class='btn btn-primary w-100' value="login">
            </div>
    </form>
</div>
@endsection
