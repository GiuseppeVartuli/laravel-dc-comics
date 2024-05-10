@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5 " style="width: 18rem;">
                <img src="{{$comic->cover_img}}" class="card-img-top" alt="cover_img">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->description}}</p>
                  
                </div>
              </div>
        </div>
    </div>
</div>

@endsection