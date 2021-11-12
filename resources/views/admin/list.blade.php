@extends('admin-base')
@section('title')
Dashboard
@endsection
@section('body')

<div class='container'>
    <nav class='navbar'>
        <div>
            <a href='{{route(Route::currentRouteName())}}/create' class='nav-link'><button class='btn btn-primary'>Create</button></a>
        </div>
        <ul class='navbar-nav ms-auto'>
            <li class='nav-item'>
                <button class='btn btn-primary' id='delete'>Delete</button>
            </li>
        </ul>
    </nav>
    <table class='w-100 table table-bordered'>
        <tr>
            <td></td>
            @foreach($column as $a)
            <td>{{$a}}</td>
            @endforeach
        </tr>
        @foreach($list as $l)
        
        <tr>
            <td>
                <input type='checkbox' name='delete_id' value='{{$l["id"]}}'>
            </td>
            @foreach($column as $a)
            @if(is_int($l[$a]) && $l[$a]!=0)
            <td><a href='{{route(Route::currentRouteName())}}/update/{{$l["id"]}}' class='text-decoration-none text-black'>{{$l[$a]}}</a></td>
            @elseif($l[$a]==1)
            <td><a href='{{route(Route::currentRouteName())}}/update/{{$l["id"]}}' class='text-decoration-none text-black'>banned</a></td>
            @elseif ($l[$a]==0)
            <td><a href='{{route(Route::currentRouteName())}}/update/{{$l["id"]}}' class='text-decoration-none text-black'>avaliable</a></td>
            @else
            <td><a href='{{route(Route::currentRouteName())}}/update/{{$l["id"]}}' class='text-decoration-none text-black'>{{$l[$a]}}</a></td>
            @endif
            @endforeach
        </tr>
        
        @endforeach
    </table>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
    var q = document.getElementById('delete');

    q.onclick = () => {
        var o = []
        var g = document.getElementsByName('delete_id');
        console.log(g);
        for (i of g) {
            if (i.checked) {
                o.push(i.value);
            }
        }

        $.ajax({
            url: '{{route(Route::currentRouteName())}}/delete',
            type: 'POST',
            method: "POST",
            contentType: 'application/x-www-form-urlencoded',
            data: {
                'delete_id': o
            },
            success: (data) => {
                var a = g.length
                while (--a >= 0) {
                    if (g[a].checked) {
                        console.log(g[a].value)
                        g[a].parentNode.parentNode.parentNode.removeChild(g[a].parentNode.parentNode);
                    }
                }
            },
            error:(error)=>{
                alert(error.message);
            }
        });
    }
</script>
@endsection