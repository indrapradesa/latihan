@extends('partial.main')

@section('container')
   <h2 class="tracking-tight text-3xl font-bold mb-3">{{  $post->title  }}</h2>
   <p>By. Yanto Basna In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p class="text-justify mb-3 font-light text-gray-500 dark:text-gray-900 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-500 first-letter:mr-3 first-letter:float-left">{!! $post->body !!}</p>
    <a href="/blog" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline mt-5"> Go Back</a>
@endsection
