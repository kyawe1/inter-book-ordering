@extends('base')
@section('title')
Home
@endsection
@section('body')
<div class="container-fluid bg-info rounded-bottom">
    <div class="container-xl p-3 py-5">
        <div class="text-wrap display-3 w-50 py-1">
            Welcome From Bulma Movie Store
        </div>
        <div class="p-1">
            To Find Out More
            <a href='list'><button class="btn btn-primary rounded">Click here >></button></a>
        </div>
    </div>
</div>
<div class='w-100 py-2 my-2 display-4 text-center'>
    Mission
</div>
<div class="container-lg py-3 my-2">
    <div class="d-lg-flex justify-content-around">
        <div>
            <div class="d-block w-50 m-auto text-center p-2 my-2">
                <img src="./images/index_trust.png" class='img-fluid' />
            </div>
            <div class="h6 p-2 text-warp lh-base">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit
                accusantium omnis doloribus eum laborum? Sunt quod earum ipsam
                vero incidunt error. Alias molestiae, quidem est consequuntur
                impedit optio aliquam maiores.
            </div>
        </div>
        <div>
            <div class="d-block w-50 m-auto text-center p-2 my-2">
                <img src="./images/index_meter.png" class='img-fluid' />
            </div>
            <div class="h6 p-2 text-warp lh-base">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit
                accusantium omnis doloribus eum laborum? Sunt quod earum ipsam
                vero incidunt error. Alias molestiae, quidem est consequuntur
                impedit optio aliquam maiores.
            </div>
        </div>
        <div>
            <div class="d-block w-50 m-auto text-center p-2 my-2">
                <img src="./images/index.png" class='img-fluid' />
            </div>
            <div class="h6 p-2 text-warp lh-base">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit
                accusantium omnis doloribus eum laborum? Sunt quod earum ipsam
                vero incidunt error. Alias molestiae, quidem est consequuntur
                impedit optio aliquam maiores.
            </div>
        </div>
    </div>
</div>
    @endsection