<?php


use App\Models\Category;
use PhpParser\Node\Stmt\If_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
        "title" => "home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => 'about',
        "name" => "Muhammad Viqri Febriana",
        "email" => "193040041@mail.unpas.ac.id",
        "image" => "gambar.jpg"
    ]);
});


Route::get('/post', [PostController::class, 'index']);
// halaman single post
route::get('posts/{post:slug}', [PostController::class, 'show']);


route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);
