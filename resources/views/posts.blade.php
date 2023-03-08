@extends('partial.main')

@section('container')
    @foreach ( $post as $posts )
    <article class="mb-5">
        <h2>
            <a href="/blog/{{ $posts["slug"] }}">{{  $posts["title"]  }}</a>
        </h2>
        <h5>By : {{ $posts["author"] }}</h5>
        <p class="mb-3 font-light text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left">{{ $posts["body"] }}</p>
    </article>
    @endforeach
@endsection
