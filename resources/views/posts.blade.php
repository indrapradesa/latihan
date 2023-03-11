@extends('partial.main')

@section('container')
<div class="text-5xl font-extrabold">
    <p class="text-4xl px-3 font-bold text-gray-900 dark:text-gray-900">{{ $title }}</p>
</div>

@if ($post->count())
    <div class="m-auto px-40 py-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-2">
            <img class="img-fluid" src="https://source.unsplash.com/1200x400/?{{ $post[0]->category->name }}" alt="" />
        <div class="p-5 text-center">
            <a href="#">
                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post[0]->title }}</h3>
            </a>
            <p class="mb-2 font-bold text-white">By. <a href="/authors/{{ $post[0]->author->username }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $post[0]->author->name }}</a> In <a href="/categories/{{ $post[0]->category->slug }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $post[0]->category->name }}</a></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post[0]->excerpt }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><small>{{ $post[0]->created_at->diffForHumans() }}</small></p>
            <a href="/blog/{{ $post[0]->slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    @else
        <p class="text-4xl font-medium text-center text-gray-900 dark:text-white"> No Post Found.</p>
@endif

<div class="grid grid-cols-4 gap-4 mt-3">
    @foreach ($post->skip(1) as $posts )
    <div class="max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="position-absolute bg-blue-800 px-3 py-2 text-bold text-white">
            <a href="/categories/{{ $posts->category->slug }}" class="font-medium text-white dark:text-white hover:underline">{{ $posts->category->name }}</a>
        </div>
        <img class="h-auto w-auto rounded-lg rounded-t-lg" src="https://source.unsplash.com/500x400/?{{ $posts->category->name }}" alt="" />
        <div class="p-5">
            <a href="#">
                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts->title }}</h3>
            </a>
            <p class="mb-2 font-bold text-white">By. <a href="/authors/{{ $posts->author->username }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $posts->author->name }}</a> In <a href="/categories/{{ $posts->category->slug }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $posts->category->name }}</a></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts->excerpt }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><small>{{ $posts->created_at->diffForHumans() }}</small></p>
            <a href="/blog/{{ $post[0]->slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    @endforeach
  </div>
@endsection
