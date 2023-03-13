@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
        </div>
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> to my post</a>
        <a href="#" class="btn btn-warning"><span data-feather="arrow-left"></span>Edit</a>
        <a href="#" class="btn btn-danger"><span data-feather="arrow-left"></span>Delete</a>

        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

        <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block mt-3">Back to posts</a>
    </div>
</div>
@endsection
