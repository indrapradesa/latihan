@extends('dashboard.layouts.main')

@section('container')

<div class="md:container md:mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="tracking-tight text-3xl font-bold mb-3">{{  $post->title  }}</h2>
            <img class="img-fluid rounded-lg rounded-t-lg" src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="" />
            <p>By. <a href="/blog?author={{ $post->author->username }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $post->author->name }} </a> In <a href="/blog?category={{ $post->category->slug }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $post->category->name }}</a></p>
             <p class="text-justify mb-3 font-light text-gray-500 dark:text-gray-900 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-500 first-letter:mr-3 first-letter:float-left">{!! $post->body !!}</p>
             <a href="/blog" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline mt-5"> Go Back</a>
        </div>
    </div>
  </div>
@endsection
