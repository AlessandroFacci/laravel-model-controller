@extends('layouts.app')

@section('main-content')
<div class="container mt-5">
  <div class="row g-3">
    @forelse ($movies as $movie)
    <div class="col-3">
      <div class="card h-100">
        <div class="card-header text-center">
          <h5>{{$movie->title}}</h5>
        </div>
        <div class="card-body text-center">
          <h6>{{$movie->original_title}}</h6>
          <p>{{$movie->nationality}}</p>
          <p>{{$movie->date}}</p>
          <p>{{$movie->vote}}</p>
        </div>
      </div>
    </div>
    @empty
      Movies not found
    @endforelse
    
  </div>
</div>
    
@endsection