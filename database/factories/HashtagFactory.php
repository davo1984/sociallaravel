<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hashtag;
use Faker\Generator as Faker;

$factory->define(Hashtag::class, function (Faker $faker) {
    return [
        'post_id'  => $faker->randomDigitNot(0),
        'body' => $faker->word
    ];
});
