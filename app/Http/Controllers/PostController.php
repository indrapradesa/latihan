<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            // "post" => Post::all()
            "post" => Post::latest()->get()
        ]);
    }

    // route model binding
    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
