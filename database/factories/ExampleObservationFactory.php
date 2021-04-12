<?php

use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;

$factory->define(\App\Entities\ExampleObservation::class, function(Faker\Generator $faker, array $attributes) {
    $value = $faker->unique()->numberBetween(1, 200);

    return [
        'id' => $faker->unique()->randomNumber(),
        'protocol_id' => isset($attributes['protocol_id']) ? $attributes['protocol_id'] : $faker->regexify('\d\d-\d\d\d\d'),
        'result_timestamp' => Carbon::now()->subDays(5),
        'patient_id' => 'PATIENT-' . $faker->word,
        'lab_test_code' => $faker->word,
        'lab_result_value' => $faker->randomFloat(),
        'text_result' => $faker->word,
        'unit' => $faker->word,
        'normal_range' => ">= {$value}",
        'loinc_code' => $faker->numberBetween(1, 99999999999)
    ];
});