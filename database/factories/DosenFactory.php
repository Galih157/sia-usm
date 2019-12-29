<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Dosen;
use Faker\Generator as Faker;

$factory->define(Dosen::class, function (Faker $faker) {
    $username =  $faker->userName;

    return [
        'nama' => $faker->name,
        'username' => $username,
        'email' => $faker->safeEmail,
        'password' => Hash::make($username),
        'nis' => mt_rand(10000000, 99999999),
        'jenis_kelamin' => $faker->randomElement(['L', 'P'])
    ];
});
