<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Company;
use App\User;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'company_id' => function () {
            return factory(Company::class)->create()->id;
        },
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Company::class, function (Faker\Generator $fake) {
    $id = str_replace('-', '', date('Y-m') . '-' . $fake->randomNumber(6));

    return [
        'id' => $id,
        'owner_id' => function() use ($id) {
            return factory(User::class)->create(['company_id' => $id])->id;
        },
        'name' => $fake->company,
        'max_size' => 5,
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d'),
    ];
});

$factory->define(App\Models\ChartOfAccount::class, function (Faker\Generator $fake) {
    $company = $fake->company;
    $id = $company . '-' . $fake->numberBetween(10000, 999999);

    return [
        'id' => $id,
        'company_id' => $company,
        'description' => $fake->word,
        'type_code' => $fake->randomKey(config('accurate.accountTypes')),
    ];
});
