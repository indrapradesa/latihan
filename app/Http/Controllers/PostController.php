<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $title ='';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }elseif(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title =' By '. $author->name;
        }

        return view('posts', [
            "title" => "All Post" . $title,
            "active" => "posts",
            "post" => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(9)->withQueryString()
            // withQueryString()->apapun query string sebelumnya bawa
        ]);
    }

    // route model binding
    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
