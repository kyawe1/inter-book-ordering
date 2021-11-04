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
            <label class='form-label' for='category_id'>Category</label>
            <input type="text" name="category_id" id="category_id" class='form-control-lg' placeholder='Book Name' value='{{$obj->category_id}}'>
        </div>
        <div>
            <label class='form-label' for='book_id'>Book</label>
            <input type="text" name="book_id" id="book_id" class='form-control-lg' placeholder='ISBN_Number' value='{{$obj->book_id}}'>
        </div>
        <div><input type="submit" value="Save"></div>
    </form>
</div>
@else
<form method='POST'>
    @csrf
    <div>
        <label class='form-label' for='category_id'>Category</label>
        <input type="text" name="category_id" id="category_id" class='form-control-lg' placeholder='Book Name'>
    </div>
    <div>
        <label class='form-label' for='book_id'>Book</label>
        <input type="text" name="book_id" id="book_id" class='form-control-lg' placeholder='ISBN_Number'>
    </div>
    <div><input type="submit" value="Save"></div>
</form>
</div>
@endif
@endsection