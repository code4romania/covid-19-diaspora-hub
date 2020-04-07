<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entity;
use Faker\Generator as Faker;

$factory->define(Entity::class, function (Faker $faker) {
    return [
        'name'           => $faker->company,
        'description'    => $faker->realText(rand(10, 500)),
        'email'          => $faker->safeEmail,
        'phone'          => $faker->phoneNumber,
        'url'            => $faker->url,
        'address_line_1' => $faker->streetAddress,
        'country'        => $faker->countryCode,
        'city'           => $faker->city,
        'county'         => $faker->county,
        'postal_code'    => $faker->postcode,
        'latitude'       => $faker->latitude,
        'longitude'      => $faker->longitude,
    ];
});
