@extends('layouts.app')


@section('content')

<div class="container bg-light mt-4">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3 ">
            <label for="title" class="form-label">Title</label>
        <input type="text" 
        class="form-control"
        name="title"
        id="title"
        aria-activedescendant="titleHelper"
        placeholder="post title">
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
        placeholder="post cover_img">
        <small id="cover_imgHelper"
        class="form-text text-muted ">Type a cover_img for your post</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mb-2"> Create </button>
        
    </form>
</div>

@endsection