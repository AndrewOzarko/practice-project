<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'group_id' => $faker->numberBetween(1, 5),
        'email' => $faker->email,
        'birthday' => $faker->date()
    ];
});
