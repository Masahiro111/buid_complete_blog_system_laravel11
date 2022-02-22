<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // CategorySeeder::class,
            RoleSeeder::class,
            // UserSeeder::class,
            // PostSeeder::class,
        ]);

        \App\Models\Category::factory(10)->create();
        $users = \App\Models\User::factory(10)->create();

        foreach ($users as $user) {
            $user->image()->save(Image::factory()->make());
        }

        $posts = \App\Models\Post::factory(10)->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\Tag::factory(20)->create();

        foreach ($posts as $post) {
            $tags_ids = [];
            $tags_ids[] = Tag::all()->random()->id;
            $tags_ids[] = Tag::all()->random()->id;
            $tags_ids[] = Tag::all()->random()->id;

            $post->tags()->sync($tags_ids);
            $post->image()->save(Image::factory()->make());
        }
    }
}
