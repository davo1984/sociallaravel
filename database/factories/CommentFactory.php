<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->randomDigitNot( 0 ),
        'user_id' => $faker->randomDigitNot( 0 ),
        'body' => $faker->paragraph
    ];
});
