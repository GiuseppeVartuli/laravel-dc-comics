@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        @forelse ($comics as $comic)
        <div class="col mt-4">
            
                <div class="card" style="width: 18rem;">
                <img src="{{$comic->cover_img}}" class="card-img-top" alt="cover_img">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->description}}</p>
                  <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">View</a>
                  <a href="#" class="btn btn-primary">Edit</a>
                  <a href="#" class="btn btn-primary">Delete</a>
                </div>
              </div>
        </div>
            @empty
                <h1>Incoming comics</h1>
            @endforelse
            
    </div>
</div>

@endsection