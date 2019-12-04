<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Rodadas;
use Faker\Generator as Faker;

$factory->define(Rodadas::class, function (Faker $faker) {

    return [
        'rodada' => $faker->randomDigitNotNull,
        'campId' => $faker->randomDigitNotNull,
        'dataJogo' => $faker->word,
        'horaJogo' => $faker->date('Y-m-d H:i:s'),
        'localJogo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->word
    ];
});
