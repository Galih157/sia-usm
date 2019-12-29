<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    $username =  $faker->userName;

    return [
        'nama' => $faker->name,
        'username' => $username,
        'email' => $faker->safeEmail,
        'password' => Hash::make($username)
    ];
});
