@extends('admin-base')
@section('title')
Dashboard
@endsection
@section('body')
<div class='container'>
    {{$obj}}
    @if($obj ?? '')
    <div class='h1 m-1 p-2 text-center'>Update a New Book With New Info</div>
    <form method='POST' enctype='multipart/form-data' class='p-3'>
        @csrf
        <div class='mb-3'>
            <label class='form-label' for='name'>Book Name</label>
            <input type="text" name="name" id="name" class='form-control-lg' placeholder='Book Name' value='{{$obj->name}}'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='ISBN_Number'>ISBN_Number</label>
            <input type="text" name="ISBN_Number" id="ISBN_Number" class='form-control-lg' placeholder='ISBN_Number' value='{{$obj ->ISBN_Number}}'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='author_name'>Author Name</label>
            <input type="text" name="author_name" id="author_name" class='form-control-lg' placeholder='Author Name' value='{{$obj ->author_name}}'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='publisher'>Publisher Info</label>
            <select class='form-control-lg' name='publish_id'>
                @foreach($list as $b)
                @if($obj->publish_id==$b->id)
                <option class='dropdown-item-text' value='{{$b->id}}' selected>{{$b->name}}</option>
                @else
                <option class='dropdown-item-text' value='{{$b->id}}'>{{$b->name}}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class='mb-3'>
            <label class='form-label' for='publish_date'>Publish Date</label>
            <input type="text" name="published_date" id="publish_date" class='form-control-lg' placeholder='Publish Date' value='{{$obj ->published_date}}'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='edition'>Edition</label>
            <input type="text" name="edition" id="edition" class='form-control-lg' placeholder='Edition' value='{{$obj ->edition}}'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='Details'>Details</label>
            <textarea type="text" name="Details" id="Details" class='form-control-lg' placeholder='Details'>{{$obj ->Details}}</textarea>
        </div>
        <div class='mb-3'>
            <label class='form-label'>Cover Photo</label>
            <input type="file" name="image" id="image">
        </div>
        <div class='mb-3'><input type="submit" value="Save"></div>
        <div class='mb-3'><input type="submit" value="Save"></div>
    </form>

    @else
    <div class='h1 m-1 p-2 text-center'>Add a New Book</div>
    <form method='POST' enctype='multipart/form-data' class='p-3'>
        @csrf
        <div class='mb-3'>
            <label class='form-label' for='name'>Book Name</label>
            <input type="text" name="name" id="name" class='form-control-lg' placeholder='Book Name'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='ISBN_Number'>ISBN_Number</label>
            <input type="text" name="ISBN_Number" id="ISBN_Number" class='form-control-lg' placeholder='ISBN_Number'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='author_name'>Author Name</label>
            <input type="text" name="author_name" id="author_name" class='form-control-lg' placeholder='Author Name'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='publisher'>Publisher Info</label>
            <select class='form-control-lg' class=''>

                @foreach($list as $b)
                <option class='dropdown-item-text' value='{{$b->id}}'>{{$b->name}}</option>
                @endforeach

            </select>
            <!-- <div class='mx-7 p-2 mx-auto '>
                <a href='http://localhost:8000/admin/publisher/create' target='_blank' class='text-decoration-none'><button class='btn-sm btn-dark rounded-circle'> plus </button></a>
            </div> -->
        </div>
        <div class='mb-3'>
            <label class='form-label' for='publish_date'>Publish Date</label>
            <input type="text" name="published_date" id="publish_date" class='form-control-lg' placeholder='Publish Date'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='edition'>Edition</label>
            <input type="text" name="edition" id="edition" class='form-control-lg' placeholder='Edition'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for='Details'>Details</label>
            <textarea type="text" name="Details" id="Details" class='form-control-lg' placeholder='Details'></textarea>

        </div>
        <div class='mb-3'>
            <label class='form-label'>Cover Photo</label>
            <input type="file" name="image" id="image">
        </div>
        <div class='mb-3'><input type="submit" value="Save"></div>
    </form>
    @endif
</div>
@endsection