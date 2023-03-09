@extends('partial.main')

@section('container')

<h1>Categories</h1>

    @foreach ( $categories as $c )
    <ul class="max-w-md space-y-1 list-disc list-inside text-black text-3xl mb-3 mt-3">
        <li><a href="/categories/{{ $c->slug }}">{{  $c->name  }}</a></li>
    </ul>
    @endforeach
@endsection
