<?php

use App\Models\Post;
use PhpParser\Node\Stmt\If_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Muhammad Viqri Febriana",
        "email" => "193040041@mail.unpas.ac.id",
        "image" => "gambar.jpg"
    ]);
});


Route::get('/post', [PostController::class, 'index']);
// halaman single post
route::get('posts/{slug}', [PostController::class, 'show']);
