<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Dasarata",
        "email" => "dasarata@gmail.com",
        "image" => "dasarata.png"
    ]);
});

Route::get('/blog',[PostController::class, 'index']);

//slug wildcard -> samaran
Route::get('blog/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'All Category',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => $category->name,
        'active' => 'categories',
        'post' => $category->posts->load('category', 'author')
        // 'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'posts',
        'post' => $author->posts->load('category', 'author')
    ]);
});


