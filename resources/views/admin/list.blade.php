@extends('admin-base')
@section('title')
    Dashboard
@endsection
@section('body')

    <div class='container'>
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