<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->randomNumber(10),
        'creditcard' => $faker->creditCardNumber
    ];
});
