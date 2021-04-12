<?php

use Faker\Generator as Faker;

$factory->define(\App\Protocol::class, function (Faker $faker) {
    return [
        'protocol_id' => $faker->numerify('##-####')
    ];
});
