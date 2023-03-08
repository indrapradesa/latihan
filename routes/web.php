<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "Blog",
        "nama" => "Dasarata",
        "email" => "dasarata@gmail.com",
        "image" => "dasarata.png"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "title" => "Post",
        //mengambill/get data all post
        "post" => Post::all()
    ]);
});
