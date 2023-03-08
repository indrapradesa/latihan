<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "title" => "About",
        "nama" => "Dasarata",
        "email" => "dasarata@gmail.com",
        "image" => "dasarata.png"
    ]);
});

Route::get('/blog',[PostController::class, 'index']);

//slug wildcard -> samaran
Route::get('blog/{slug}',[PostController::class, 'show']);


