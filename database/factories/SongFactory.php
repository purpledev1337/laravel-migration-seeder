<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'genre' => $faker -> word(),
        'features' => $faker -> optional() -> name(),
        'single' => $faker -> boolean(),
        'lyrics' => $faker -> optional() -> text(300),
        'duration' => $faker -> numberBetween(1, 6000),
        'price' => $faker -> numberBetween(500, 10000)
    ];
});