@extends('partial.main')

@section('container')
<div class="text-5xl font-extrabold">
    <p class="text-4xl font-bold text-gray-900 dark:text-gray-900">POST</p>
</div>
    <div class="box-border mt-4 p-4 border-4 border-solid border-rose-500">
        @foreach ( $post as $posts )
        <article class="mb-5 mt-4 divide-y divide-blue-400 pb-4">
            <h2 class="tracking-tight text-3xl font-bold mb-3">
                <a href="/blog/{{ $posts->slug }}">{{  $posts->title  }}</a>
            </h2>

            <p class="mb-2 font-bold ">By. <a href="#" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $posts->user->name }}</a> In <a href="/categories/{{ $posts->category->slug }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $posts->category->name }}</a></p>

            <p class="font-bold text-justify text-lg capitalize text-gray-400 dark:text-gray-900">{{  $posts->excerpt  }}</p>

            <a href="/blog/{{ $posts->slug }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Read More...</a>
        </article>
        @endforeach
    </div>
@endsection
