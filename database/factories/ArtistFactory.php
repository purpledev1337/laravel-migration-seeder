<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'alias' => $faker -> optional() -> name(),
        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName(),
        'date_of_birth' => $faker -> dateTimeAD(),
        'band' => $faker -> optional() -> catchPhrase(2),
        'thumb_path' => $faker -> optional() -> numerify('url-####')
    ];
});
