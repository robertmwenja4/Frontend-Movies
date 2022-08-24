@extends('welcome')

@section('content')
<h1>Hello Homepage</h1>
<div class="custom-product">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="height: 400px;" src="{{ url('images/bruno.jpeg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 400px;" src="{{ url('images/ugali_chicken.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img style="height: 400px;" src="{{ url('images/bruno.jpeg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<h2 class="mt-2 mb-3">Movies Category</h2>
<div>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="{{ url('images/bruno.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Movie Title 1</h5>
          <p class="card-text">Descrption of the movie 1</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 8 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ url('images/bruno.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Movie Title 2</h5>
          <p class="card-text">Description of movie 2</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="{{ url('images/bruno.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Movie title 3</h5>
          <p class="card-text">Desc using 3(Category)</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 15 mins ago</small>
        </div>
      </div>
    </div>
  </div>
</div>
<h2 class="mt-5">Featured Movies</h2>

@endsection