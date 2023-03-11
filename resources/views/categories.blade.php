@extends('partial.main')

@section('container')

<h1>Categories</h1>

<div class="grid grid-cols-4 gap-4 mt-3">
    @foreach ( $categories as $c )
        <div class="max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="position-absolute rounded-lg rounded-b-none card-img-overlay bg-blue-800 px-3 py-2 text-bold text-white">
                <a href="/blog?category={{ $c->name }}" class="font-medium text-white dark:text-white hover:underline">{{ $c->name }}</a>
            </div>
            <img class="h-auto w-auto rounded-lg rounded-t-none" src="https://source.unsplash.com/500x400/?{{ $c->name }}" alt="" />
        </div>
    @endforeach
  </div>
@endsection
