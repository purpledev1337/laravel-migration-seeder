<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title' => $faker -> catchPhrase(),
        'features' => $faker -> optional() -> name(),
        'release' => $faker -> date(),
        'thumb_path' => $faker -> optional() -> numerify('url-####'),
        'n_sells' => $faker -> numberBetween(1, 1000000),
        'price' => $faker -> numberBetween(10, 10000)
    ];
});
