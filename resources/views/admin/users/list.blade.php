@extends('admin-base')
@section('title')
    Dashboard
@endsection
@section('body')

    <div class='container mt-2'>
    <nav class='navbar'>
        <div>
            <a href='{{route(Route::currentRouteName())}}/create' class='nav-link'><button class='btn btn-primary'>Create</button></a>
        </div>
        <!-- <ul class='navbar-nav ms-auto'>
            <li class='nav-item'>
                <button class='btn btn-primary' id='delete'>Delete</button>
            </li>
        </ul> -->
    </nav>
        <table class='w-100 table table-bordered'>
            <tr>
            @foreach($column as $a)
                <td>{{$a}}</td>
            @endforeach
            </tr>
            @foreach($list as $l)
                <tr>
                @foreach($column as $a)
                    @if($l[$a]==1)
                        <td>banned</td>
                    @elseif ($l[$a]==0)
                        <td>avaliable</td>
                    @else
                        <td>{{$l[$a]}}</td>
                    @endif
                @endforeach
                </tr>
            @endforeach
        </table>
    </div>
@endsection