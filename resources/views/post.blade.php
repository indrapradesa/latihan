@extends('partial.main')

@section('container')
   <h2>{{  $post["title"]  }}</h2>
    <h5>By : {{ $post["author"] }}</h5>
    <p class="mb-3 font-light text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left">{{ $post["body"] }}</p>

    <a href="/blog" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline mt-5"> Go Back</a>
@endsection
