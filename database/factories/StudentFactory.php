<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;
use App\Models\District;

$factory->define(Student::class, function (Faker $faker) {

    $division = District::whereNull('parent_id')->get()->random()->id;

    return [
        'student_id' =>   $faker->unique()->numberBetween(1703210200000, 2003210299999),
        'name' => 		  $faker->name,
        'gender' => 	  $faker->randomElements(['male', 'female'])[0],
        'dob' => 		  $faker->dateTimeBetween('1990-01-01', '2003-12-31')->format('Y/m/d'),
        'department' =>	  $faker->randomElements(['CSE', 'EEE', 'LAW'])[0],
        'batch' => 		  $faker->randomElements(['32nd', '33rd', '34th'])[0],

        'division_id' =>  $division,
        'district_id' =>  District::whereNotNull('parent_id')->where('parent_id', $division)
                                    ->get()->random()->id,
                                    
        'phone_number' => $faker->unique()->numberBetween(8801300000000, 8801999999999),
        'email' => 		  $faker->unique()->safeEmail,
    ];
});
