@extends('admin-base')
@section('title')
Dashboard
@endsection
@section('body')
<div class='container'>
    @if($obj ?? '')
    <form method='POST'>
        @csrf
        <div>
            <label class='form-label' for='name'>Book Name</label>
            <input type="text" name="name" id="name" class='form-control' placeholder='Book Name' value='{{$obj->name}}'>
        </div>
        <div><input type="submit" value="Save"></div>

    </form>
    @else
    <form method='POST'>
        @csrf
        <div>
            <label class='form-label' for='name'>Book Name</label>
            <input type="text" name="name" id="name" class='form-control' placeholder='Book Name'>
        </div>
        <div><input type="submit" value="Save"></div>

    </form>
    @endif
</div>
@endsection