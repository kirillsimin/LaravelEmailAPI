<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Email::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::pluck('id')->random(),
        'subject' => $faker->name,
        'text' => $faker->realText(),
    ];
});
