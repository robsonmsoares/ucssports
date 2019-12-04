<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Jogos;
use Faker\Generator as Faker;

$factory->define(Jogos::class, function (Faker $faker) {

    return [
        'campId' => $faker->randomDigitNotNull,
        'rodada' => $faker->randomDigitNotNull,
        'timeCasaId' => $faker->randomDigitNotNull,
        'timeForaId' => $faker->randomDigitNotNull,
        'golsTimeCasa' => $faker->randomDigitNotNull,
        'golsTimeFora' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->word
    ];
});
