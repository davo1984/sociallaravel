<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNot( 0 ),
        'body' => $faker->paragraph,
        'title' => $faker->sentence
    ];
});
