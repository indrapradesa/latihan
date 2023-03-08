@extends('partial.main')

@section('container')
    @foreach ( $post as $posts )
    <article class="mb-5 mt-4">
        <h2 class="tracking-tight text-3xl font-bold mb-3">
            <a href="/blog/{{ $posts->slug }}">{{  $posts->title  }}</a>
        </h2>
        <p class="text-2xl mb-3 font-light first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left">{{ $posts->body }}</p>
    </article>
    @endforeach
@endsection
