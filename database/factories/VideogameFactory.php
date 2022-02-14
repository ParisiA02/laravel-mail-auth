<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'titolo' => $faker -> words(1, true),
        'sottotitolo' => $faker -> words(1, true),
        'rating' => $faker -> numberBetween(1,10),
    ];
});
