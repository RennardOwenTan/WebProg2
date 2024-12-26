@extends('master')

@section('title', 'Category')


@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="margin-top: 100px;">
    <div class="carousel-item active">
      <img src="{{url('images/Carousel1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
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

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Seliana</h1>
        <p class="lead text-body-secondary">Your new go-to animal encyclopedia</p>
      </div>
    </div>
  </section>
  
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($blogs as $blog)
            <div class="col">
                <div class="card shadow-sm">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="{http://www.w3.org/2000/svg}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img src="{{url($blog->image)}}" alt=""  style="width: 100%; height: 250px; object-fit: cover;" >
                    <div class="card-body">
                    <p class="card-text">{{$blog->species}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <!-- <button href="{{url('details/'.$blog->animal_id)}}" type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                        <a href="{{url('details/'.$blog->id)}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection