@extends('base')
@section('title')
List Of Books
@endsection
@section('body')
<!-- startofcorusal -->
<div class="text-center h4 py-2">Discounted Items</div>
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active w-100 h-50 my-2">
                <img src="images/getty_943018312_402276.jpg" class="img-fluid w-100 h-100" alt="images/getty_943018312_402276.jpg" />
            </div>
            <div class="carousel-item w-100 h-50">
                <img src="images/index.png" class="img-fluid w-100 h-100" alt="images/index.png" />
            </div>
            <div class="carousel-item w-100 h-50">
                <img src="images/getty_943018312_402276.jpg" class="img-fluid w-100 h-100" alt="images/getty_943018312_402276.jpg" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- endofcorusel -->
<div>
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-sm-3 g-4">
            @foreach($list as $a)
            <a href="{{route('detail',$a->id)}}">
            <div class="col">
                <!-- startofcolumn -->
                <div class="card p-3">
                    <!-- startofcard -->
                    
                    @if($a->image)
                    <img src="{{Storage::url($a->image)}}" class="img-thumbnail" />
                    @endif
                    <div class="text-wrap p-1">
                        <div class='h5'>
                            {{$a->name}}
                        </div>
                        <div class='h6'>
                            {{$a->author_name}}<br>
                            {{$a->publish_date}}
                        </div>
                    </div>
                </div>
                <!-- endofcard -->
            </div>
            </a>
            <!-- endofcolumn -->
            @endforeach
        </div>
    </div>
</div>
@endsection