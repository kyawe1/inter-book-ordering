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
            <label class='form-label' for='name'>Publisher Name</label>
            <input type="text" name="name" id="name" class='form-control' placeholder='Publisher Name' value='{{$obj->name}}'>
        </div>
        <div>
            <label class='form-label' for='address'>Address</label>
            <input type="text" name="address" id="address" class='form-control' placeholder='Address' value='{{$obj->address}}'>
        </div>
        <div>
            <label class='form-label' for='contact_number'>Contact Number</label>
            <input type="text" name="contact_number" id="contact_number" class='form-control' placeholder='Contact Number' value='{{$obj->contact_number}}'>
        </div>
        <div>
            <label class='form-label' for='email'>Email</label>
            <input type="text" name="email" id="email" class='form-control' placeholder='Email' value='{{$obj->email}}'>
        </div>
        <div><input type="submit" value="Save" class="my-2 py-2"></div>
    </form>
    @else
    <form method='POST'>
        @csrf
        <div>
            <label class='form-label' for='name'>Publisher Name</label>
            <input type="text" name="name" id="name" class='form-control' placeholder='Publisher Name'>
        </div>
        <div>
            <label class='form-label' for='address'>Address</label>
            <input type="text" name="address" id="address" class='form-control' placeholder='Address'>
        </div>
        <div>
            <label class='form-label' for='contact_number'>Contact Number</label>
            <input type="text" name="contact_number" id="contact_number" class='form-control' placeholder='Contact Number'>
        </div>
        <div>
            <label class='form-label' for='email'>Email</label>
            <input type="text" name="email" id="email" class='form-control' placeholder='Email'>
        </div>
        <div class="my-2 py-2"><input type="submit" value="Save" class="btn btn-primary"></div>
    </form>
    @endif
</div>
@endsection