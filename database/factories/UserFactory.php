<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
//        'country_id'=>factory(App\Model\Countries\country::class)->create()->id,
        'country_id'=>2,
        'name' => $faker->firstName,
        'last_name'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'activated'=>true,
        'email_verified_at' =>null,
        'password' => Hash::make('123456789'), // password
        'remember_token' => Str::random(10),
        'signup_ip_address'=>$faker->ipv4,
        'signup_confirmation_ip_address'=>$faker->ipv4
    ];
});

$factory->define(\App\Profile::class,function(Faker $faker){
    $gender = $faker->randomElement(['male', 'female']);
    return [
//        'user_id'=>factory(User::class)->create()->id,

        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'bio'=>$faker->paragraph(2,true),
        'gender'=>$gender,
        'birthday'=>$faker->dateTimeThisCentury,
        'phoneNumber'=>$faker->phoneNumber,
        'phoneNumber2'=>$faker->phoneNumber,
        'avatar'=>$faker->image('public/storage/images/avatar',50,50, null, false) ,
        'avatar_status'=>true,
        'location'=>$faker->streetAddress,
        'facebook_account'=>$faker->userName,
        'gmail_account'=>$faker->userName,
        'bank_account'=>$faker->creditCardNumber(),
        'bank_account2'=>$faker->creditCardNumber,

    ];
});


//$factory->afterCreating(User::class,function($faker,$user){
//
//    $role = $faker->randomElement(['admin','customer','agents','propertyowner']);
//
//});
