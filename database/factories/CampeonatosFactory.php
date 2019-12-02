<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Campeonatos;
use Faker\Generator as Faker;

$factory->define(Campeonatos::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'ano' => $faker->randomDigitNotNull,
        'qtdTimes' => $faker->randomDigitNotNull,
        'casaFora' => $faker->word,
        'dataInicio' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
