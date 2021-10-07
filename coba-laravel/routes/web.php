<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\If_;

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






Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Viqri Febriana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae aliquam ex consectetur deserunt! Quibusdam distinctio earum sint minus nobis molestias, eum doloremque soluta voluptatibus dolor amet porro repellendus esse alias quo quidem similique! Soluta saepe molestias sed tenetur impedit consectetur vitae voluptas, perspiciatis sit quo cupiditate nobis quibusdam nihil quos nemo possimus sint sunt aliquam cumque rerum ipsum? Quibusdam quam natus inventore? Ipsa quibusdam similique, nobis dicta doloremque tempore culpa voluptatibus voluptatum vel consectetur ea ratione doloribus minima esse duci"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Rizky Fauzan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam asperiores non consectetur et. Amet magni ea praesentium culpa non ipsa tempora facilis excepturi rem. Obcaecati sapiente, deserunt officia magnam incidunt optio ad sunt sint rem sed in quidem earum praesentium esse! Culpa ducimus iste veritatis similique quis eos expedita nobis quam eaque eligendi beatae accusamus, aspernatur ut non tempore dolores aliquam, provident minima pariatur voluptatibus esse. Aliquid, aperiam deleniti maiores nisi tenetur ipsum aliquam, odio quo pariatur sunt voluptas recusandae laborum asperiores enim eum inventore? Eaque pariatur rerum, odio expedita nostrum fuga sapiente debitis dolor porro, nemo illum! Placeat, iusto?i"
        ]

    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Viqri Febriana",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae aliquam ex consectetur deserunt! Quibusdam distinctio earum sint minus nobis molestias, eum doloremque soluta voluptatibus dolor amet porro repellendus esse alias quo quidem similique! Soluta saepe molestias sed tenetur impedit consectetur vitae voluptas, perspiciatis sit quo cupiditate nobis quibusdam nihil quos nemo possimus sint sunt aliquam cumque rerum ipsum? Quibusdam quam natus inventore? Ipsa quibusdam similique, nobis dicta doloremque tempore culpa voluptatibus voluptatum vel consectetur ea ratione doloribus minima esse duci"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Rizky Fauzan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam asperiores non consectetur et. Amet magni ea praesentium culpa non ipsa tempora facilis excepturi rem. Obcaecati sapiente, deserunt officia magnam incidunt optio ad sunt sint rem sed in quidem earum praesentium esse! Culpa ducimus iste veritatis similique quis eos expedita nobis quam eaque eligendi beatae accusamus, aspernatur ut non tempore dolores aliquam, provident minima pariatur voluptatibus esse. Aliquid, aperiam deleniti maiores nisi tenetur ipsum aliquam, odio quo pariatur sunt voluptas recusandae laborum asperiores enim eum inventore? Eaque pariatur rerum, odio expedita nostrum fuga sapiente debitis dolor porro, nemo illum! Placeat, iusto?i"
        ]

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
