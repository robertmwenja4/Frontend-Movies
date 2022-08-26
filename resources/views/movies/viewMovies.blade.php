@extends('welcome')

@section('content')
    <h1>View Movies</h1>
    @foreach ($movies as $movie)
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="{{ $movie->movie_image }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <p class="card-text">Descrption of the movie 1</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 8 mins ago</small>
            </div>
          </div>
        </div>
    @endforeach
@endsection