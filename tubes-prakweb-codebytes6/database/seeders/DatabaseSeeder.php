<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Muhammad Viqri Febriana',
            'username' => 'viqri',
            'email' => 'Muhammadviqrifebriana@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'rizky',
        //     'email' => 'rizky@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-desing'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio, similique possimus facilis dolore? Corporis molestias, suscipit consectetur repudiandae omnis ea commodi quos sequi! Asperiores molestias fuga aliquid earum tempora ipsum ab est aut, dolores, natus vitae saepe doloremque minima soluta amet nulla adipisci recusandae quasi, explicabo distinctio velit nesciunt facilis. Aperiam iste consequatur laudantium unde, asperiores perspiciatis, possimus quis ipsa, voluptatum mollitia vitae? Maxime minus voluptas doloribus consequuntur iusto praesentium tempora. Enim, maiores tempora velit totam vel officia neque tenetur quasi ducimus aspernatur, quos, eius esse autem? Ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio, similique possimus facilis dolore? Corporis molestias, suscipit consectetur repudiandae omnis ea commodi quos sequi! Asperiores molestias fuga aliquid earum tempora ipsum ab est aut, dolores, natus vitae saepe doloremque minima soluta amet nulla adipisci recusandae quasi, explicabo distinctio velit nesciunt facilis. Aperiam iste consequatur laudantium unde, asperiores perspiciatis, possimus quis ipsa, voluptatum mollitia vitae? Maxime minus voluptas doloribus consequuntur iusto praesentium tempora. Enim, maiores tempora velit totam vel officia neque tenetur quasi ducimus aspernatur, quos, eius esse autem? Ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio, similique possimus facilis dolore? Corporis molestias, suscipit consectetur repudiandae omnis ea commodi quos sequi! Asperiores molestias fuga aliquid earum tempora ipsum ab est aut, dolores, natus vitae saepe doloremque minima soluta amet nulla adipisci recusandae quasi, explicabo distinctio velit nesciunt facilis. Aperiam iste consequatur laudantium unde, asperiores perspiciatis, possimus quis ipsa, voluptatum mollitia vitae? Maxime minus voluptas doloribus consequuntur iusto praesentium tempora. Enim, maiores tempora velit totam vel officia neque tenetur quasi ducimus aspernatur, quos, eius esse autem? Ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ab nobis esse illo ex iusto excepturi officia? Repellendus magni eius optio, similique possimus facilis dolore? Corporis molestias, suscipit consectetur repudiandae omnis ea commodi quos sequi! Asperiores molestias fuga aliquid earum tempora ipsum ab est aut, dolores, natus vitae saepe doloremque minima soluta amet nulla adipisci recusandae quasi, explicabo distinctio velit nesciunt facilis. Aperiam iste consequatur laudantium unde, asperiores perspiciatis, possimus quis ipsa, voluptatum mollitia vitae? Maxime minus voluptas doloribus consequuntur iusto praesentium tempora. Enim, maiores tempora velit totam vel officia neque tenetur quasi ducimus aspernatur, quos, eius esse autem? Ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
