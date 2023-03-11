@extends('partial.main')

@section('container')
<div class="text-5xl text-center mb-3 font-extrabold">
    <p class="text-4xl px-3 font-bold text-gray-900 dark:text-gray-900">{{ $title }}</p>
</div>

<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-md-2 mt-2">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" name="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required value="{{ request('search') }}">
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>
    </div>
  </div>

@if ($post->count())
    <div class="m-auto px-40 py-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-2">
            <img class="img-fluid" src="https://source.unsplash.com/1200x400/?{{ $post[0]->category->name }}" alt="" />
        <div class="p-5 text-center">
            <a href="#">
                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post[0]->title }}</h3>
            </a>
            <p class="mb-2 font-bold text-white">By. <a href="/blog?author={{ $post[0]->author->username }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $post[0]->author->name }}</a> In <a href="/blog?category={{ $post[0]->category->slug }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $post[0]->category->name }}</a></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post[0]->excerpt }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><small>{{ $post[0]->created_at->diffForHumans() }}</small></p>
            <a href="/blog/{{ $post[0]->slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>

<div class="grid grid-cols-4 gap-4 mt-3 mb-3">
    @foreach ($post->skip(1) as $posts )
    <div class="max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="position-absolute bg-blue-800 px-3 py-2 text-bold text-white">
            <a href="/blog?category={{ $posts->category->slug }}" class="font-medium text-white dark:text-white hover:underline">{{ $posts->category->name }}</a>
        </div>
        <img class="h-auto w-auto rounded-lg rounded-t-lg" src="https://source.unsplash.com/500x400/?{{ $posts->category->name }}" alt="" />
        <div class="p-5">
            <a href="#">
                <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts->title }}</h3>
            </a>
            <p class="mb-2 font-bold text-white">By. <a href="/blog?author={{ $posts->author->username }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $posts->author->name }}</a> In <a href="/blog?category={{ $posts->category->slug }}" class="font-medium text-blue-800 dark:text-blue-600 hover:underline">{{ $posts->category->name }}</a></p>
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
  @else
  <p class="text-4xl font-medium text-center text-gray-900 dark:text-white"> No Post Found.</p>
@endif

<div class="flex justify-items-end">
    <div class="inline-flex">
        {{-- <ul class="inline-flex items-center -space-x-px"> --}}
            {{ $post->links() }}
        {{-- </ul> --}}
    </div>
</div>

@endsection
