 <?php

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

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'first_name' => $faker->lastName,
        'last_name' => $faker->lastName,
        'genre' => $faker->randomElement($array = array ('M','F')),
        'email' => $faker->safeEmail,
        'phone' => $faker->tollFreePhoneNumber,
        'password' => $faker->safeColorName,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'username' => $faker->lastName,
        'password' => $faker->safeColorName,
        'role' => $faker->randomElement($array = array ('R','N')),
        'status' => $faker->randomElement($array = array ('P','A','D')),
        'email' => $faker->safeEmail,
        'email_password' => $faker->safeColorName,
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array ('Computadoras','Tablets','Celulares')),
        'description' => $faker->realText($maxNbChars = 20),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'um' => $faker->randomElement($array = array ('H87','XBX','KGM')),
        'sat_code' => $faker->unixTime($max = 'now'),
        'item_part' => $faker->creditCardNumber,
        'name' => $faker->colorName,    
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),  
        'iva' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),  
    ];
});

$factory->define(App\Category_Product::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 3),
        'product_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});