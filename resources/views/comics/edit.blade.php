@extends('layouts.app')


@section('content')

<div class="container bg-light mt-4">
    <form action="{{route('comics.update', $comic)}}" method="post">
        @csrf
        @method('PUT')


        <div class="mb-3 ">
            <label for="title" class="form-label">Title</label>
        <input type="text" 
        class="form-control"
        name="title"
        id="title"
        aria-activedescendant="titleHelper"
        placeholder="post title" value="{{$comic->title}}">
        <small id="titleHelper"
        class="form-text text-muted ">Type a title for your post</small>
        </div>
        <div class="mb-3">
            <label for="cover_img" class="form-label">Image</label>
        <input type="cover_img" 
        class="form-control"
        name="cover_img"
        id="cover_img"
        aria-activedescendant="cover_imgHelper"
        placeholder="post cover_img" value="{{$comic->cover_img}}">
        <small id="cover_imgHelper"
        class="form-text text-muted ">Type a cover_img for your post</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" rows="4" value="{{$comic->description}}"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mb-2"> Update </button>
        
    </form>
    <a class="btn btn-primary mb-2" href="{{route('comics.index')}}">Back</a>
</div>

@endsection