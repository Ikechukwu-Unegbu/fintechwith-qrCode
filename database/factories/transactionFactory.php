<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\transaction;
use Faker\Generator as Faker;

$factory->define(transaction::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'qrcode_owner_id' => $faker->randomDigitNotNull,
        'payment_method' => $faker->word,
        'qrcode_id' => $faker->randomDigitNotNull,
        'amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
