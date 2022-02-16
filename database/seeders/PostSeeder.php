<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        //     'title' => 'this is title',
        //     'slug' => 'this is slug',
        //     'excerpt' => 'this is excerpt',
        //     'body' => 'this is body',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        Post::create([
            'title' => 'this is title',
            'slug' => 'this is slug',
            'excerpt' => 'this is excerpt',
            'body' => 'this is body',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
