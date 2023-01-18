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
            <select id='book_id' name='book_id'>
                @foreach($book_list as $b)
                @if($obj->book === $b)
                    <option class='form-control' value='{{$b->id}}' selected> {{$b->name}} </option>
                @else
                    <option class='form-control' value='{{$b->id}}'> {{$b->name}} </option>
                @endif
                @endforeach
            </select>
        </div>
        <div>
            <select id='category_id' name='category_id'>
                @foreach($category_list as $c)
                @if($obj->category === $c)
                <option class='form-control' value='{{$c->id}}' selected> {{$c->name}} </option>
                @else
                <option class='form-control' value='{{$c->id}}'> {{$c->name}} </option>
                @endif
                @endforeach

            </select>
        </div>
        <div><input type="submit" value="Save"></div>
    </form>
</div>
@else
<form method='POST'>
    @csrf
    <div>
        <select id='book_id' name='book_id'>
            @foreach($book_list as $b)
            <option class='form-control' value='{{$b->id}}'>{{$b->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <select id='category_id' name='category_id'>
            @foreach($category_list as $c)
            <option class='form-control' value='{{$c->id}}'>{{$c->name}}</option>
            @endforeach
        </select>
    </div>
    <div><input type="submit" value="Save"></div>
</form>
</div>
@endif
@endsection