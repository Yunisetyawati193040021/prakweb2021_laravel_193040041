<?php

namespace App\Models;



class post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}


Post::create([
    'title' => 'judul ke tiga',
    'slug' => 'judul-Tiga',
    'excerpt' => 'Lorem ipsum dolor Ke tiga',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto corrupti nostrum molestias inventore similique aperiam exercitationem perferendis id non dolorem quidem, repellendus ducimus quos odit, totam reiciendis neque vitae!</p><p> Autem reprehenderit quisquam non repellendus soluta quibusdam magni officiis cumque officia iste beatae quo placeat nobis deserunt rerum nulla,</p><p> eaque ad. Necessitatibus tempora, eaque saepe reiciendis illum accusamus voluptas dolore, eligendi nulla laboriosam alias</p><p> ipsum maiores deleniti ipsam consequatur veniam! Omnis obcaecati quam non commodi. Impedit repellat totam fuga vitae tempora, modi quibusdam labore reiciendis, hic assumenda qui. Quibusdam incidunt doloribus ut, iste laudantium maiores ex molestias quam aliquid quis at.</p>'
]);
