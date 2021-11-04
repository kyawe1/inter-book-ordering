@extends('base')
@section('title')
Borrow List
@endsection
@section('body')
@foreach($list as $a)
<div class="container p-2">
    <!-- startofcard -->
    <div class="row my-2">
        <div class="col-12">
            <!-- startofcolumn -->
            <div class="row">
                <!-- startofsimplerow -->
                <div class="col-4">
                    <div class="w-100">
                        <img src="./images/getty_943018312_402276.jpg" class="img-fluid" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="container-md">
                        <p class='h5'>{{$a->book->name}}</p>
                        <p>Writer : {{$a->book->author_name}}</p>
                        <p>Release Year:{{$a->book->published_date}}</p>
                        <p>Produced By: {{$a->book->publish->name}}</p>
                    </div>
                </div>
                <div class="col-4">
                    <p class='fw-bold text-end p-2'>Expire In : 5 Days</p>
                    <div class='d-flex justify-content-center align-items-center h-50'>
                        <button class="btn btn-primary mx-2">Read Online</button>
                        <a href="{{route('remove',$a->id)}}"><button class="btn btn-danger mx-2">Delete</button></a>
                    </div>
                </div>
            </div>
            <!-- endofsamplerow -->
        </div>
        <!-- endofcolumn -->
    </div>
</div>
<!-- endofcard -->
</div>


@endforeach
<div class="py-2 text-center">Thanks For Reading With Us !!!</div>
@endsection