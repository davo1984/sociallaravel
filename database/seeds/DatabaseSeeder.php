<?php

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
        factory(App\User::class, 19)->create();
        factory(App\Post::class, 10)->create();
        factory(App\Comment::class, 19)->create();
        factory(App\Hashtag::class, 10)->create();
    }
}
