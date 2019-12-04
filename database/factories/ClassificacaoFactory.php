<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Classificacao;
use Faker\Generator as Faker;

$factory->define(Classificacao::class, function (Faker $faker) {

    return [
        'posicao' => $faker->randomDigitNotNull,
        'campId' => $faker->randomDigitNotNull,
        'rodada' => $faker->randomDigitNotNull,
        'timeId' => $faker->randomDigitNotNull,
        'pontos' => $faker->randomDigitNotNull,
        'vitorias' => $faker->randomDigitNotNull,
        'empates' => $faker->randomDigitNotNull,
        'derrotas' => $faker->randomDigitNotNull,
        'golsPro' => $faker->randomDigitNotNull,
        'golsContra' => $faker->randomDigitNotNull,
        'saldoGols' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->word
    ];
});
