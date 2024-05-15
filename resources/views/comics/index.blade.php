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
                  <div class="d-flex ">
                    <a href="{{route('comics.show', $comic)}}" class="btn btn-primary me-2 ">View</a>
                  <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary me-2">Edit</a>
                  <form action="{{route('comics.destroy', $comic)}}" method="POST">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger ">Delete</button>
                  
                  </form>
                  </div>
                  
                </div>
              </div>
        </div>
            @empty
                <h1>Incoming comics</h1>
            @endforelse
            
    </div>
</div>

@endsection