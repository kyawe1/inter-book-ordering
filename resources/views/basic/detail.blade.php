@extends('base')
@section('title')
Deatil
@endsection
@section('body')
<div class="container">
    <div class="row py-2">
        <div class="col-4">
            <div class="w-100">
                <img src="{{Storage::url($obj->image)}}" class="img-fluid" />
            </div>
        </div>
        <div class="col-8">
            <div class="h3 text-wrap">{{$obj->name}}</div>
            <p class="text-black-50">Comedy,Political</p>
            <p>Author : {{$obj->author_name}}</p>
            <p>Publisher : {{$obj->publisher_id}}</p>
            <p class="d-block mb-0">
                <a href='{{route("store",$obj->id)}}'><button class="btn btn-primary">Make a Order</button></a>
                <a href='{{route("remove",$obj->id)}}'><button class="btn btn-danger">Cencel</button></a>
            </p>
        </div>
    </div>
    <div class="container">
        <div class="p-2">
            <div class="py-2">Detail</div>
            <div class="p-2">
                {{$obj->Details}}
                <a href="#" class="text-decoration-none text-black-50">detail</a>
            </div>
        </div>
    </div>
</div>
@endsection