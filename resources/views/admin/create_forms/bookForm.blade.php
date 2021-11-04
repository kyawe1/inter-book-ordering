@extends('admin-base')
@section('title')
Dashboard
@endsection
@section('body')
<div class='container'>
    @if($obj ?? '')
    <form method='POST' enctype='multipart/form-data'>
        @csrf
        <div>
            <label class='form-label' for='name'>Book Name</label>
            <input type="text" name="name" id="name" class='form-control-lg' placeholder='Book Name' value='{{$obj ?? ''->name}}'>
        </div>
        <div>
            <label class='form-label' for='ISBN_Number'>ISBN_Number</label>
            <input type="text" name="ISBN_Number" id="ISBN_Number" class='form-control-lg' placeholder='ISBN_Number' value='{{$obj ?? ''->ISBN_Number}}'>
        </div>
        <div>
            <label class='form-label' for='author_name'>Author Name</label>
            <input type="text" name="author_name" id="author_name" class='form-control-lg' placeholder='Author Name' value='{{$obj ?? ''->author_name}}'>
        </div>
        <div>
            <label class='form-label' for='publish_date'>Publish Date</label>
            <input type="text" name="published_date" id="publish_date" class='form-control-lg' placeholder='Publish Date' value='{{$obj ?? ''->published_date}}'>
        </div>
        <div>
            <label class='form-label' for='edition'>Edition</label>
            <input type="text" name="edition" id="edition" class='form-control-lg' placeholder='Edition' value='{{$obj ?? ''->edition}}'>
        </div>
        <div>
            <label class='form-label' for='Details'>Details</label>
            <textarea type="text" name="Details" id="Details" class='form-control-lg' placeholder='Details' >{{$obj ?? ''->Details}}</textarea>
        </div>
        <div>
            <label class='form-label'>Cover Photo</label>
            <input type="file" name="image" id="image">
        </div>
        <div><input type="submit" value="Save"></div>
    </form>

@else
<form method='POST' enctype='multipart/form-data'>
        @csrf
        <div>
            <label class='form-label' for='name'>Book Name</label>
            <input type="text" name="name" id="name" class='form-control-lg' placeholder='Book Name'>
        </div>
        <div>
            <label class='form-label' for='ISBN_Number'>ISBN_Number</label>
            <input type="text" name="ISBN_Number" id="ISBN_Number" class='form-control-lg' placeholder='ISBN_Number'>
        </div>
        <div>
            <label class='form-label' for='author_name'>Author Name</label>
            <input type="text" name="author_name" id="author_name" class='form-control-lg' placeholder='Author Name'>
        </div>
        <div>
            <label class='form-label' for='publish_date'>Publish Date</label>
            <input type="text" name="published_date" id="publish_date" class='form-control-lg' placeholder='Publish Date'>
        </div>
        <div>
            <label class='form-label' for='edition'>Edition</label>
            <input type="text" name="edition" id="edition" class='form-control-lg' placeholder='Edition'>
        </div>
        <div>
            <label class='form-label' for='Details'>Details</label>
            <textarea type="text" name="Details" id="Details" class='form-control-lg' placeholder='Details'></textarea>
        </div>
        <div>
            <label class='form-label'>Cover Photo</label>
            <input type="file" name="image" id="image">
        </div>
        <div><input type="submit" value="Save"></div>
    </form>
@endif
</div>
@endsection