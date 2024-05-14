@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
          <div class="card mb-3 mt-5 " style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img style="width: 100%" src="{{$comic->cover_img}}" class="img-fluid rounded-start" alt="cover_img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->description}}</p>
                  
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-light " href="{{route('comics.index')}}">Indietro</a>
        </div>
    </div>
</div>

@endsection