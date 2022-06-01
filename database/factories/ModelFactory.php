<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Service::class, static function (Faker\Generator $faker) {
    return [
        'slug' => $faker->unique()->slug,
        'name' => $faker->firstName,
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'description_long' => $faker->sentence,
        'description_short' => $faker->sentence,
        'img_cover' => $faker->sentence,
        'img_cover_low_res' => $faker->sentence,
        'img_cover_alt' => $faker->sentence,
        'has_page' => $faker->boolean(),
        'featured' => $faker->boolean(),
        'order' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'perex' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Medium::class, static function (Faker\Generator $faker) {
    return [
        'model_type' => $faker->sentence,
        'model_id' => $faker->randomNumber(5),
        'uuid' => $faker->sentence,
        'collection_name' => $faker->sentence,
        'name' => $faker->firstName,
        'file_name' => $faker->sentence,
        'mime_type' => $faker->sentence,
        'disk' => $faker->sentence,
        'conversions_disk' => $faker->sentence,
        'size' => $faker->randomNumber(5),
        'manipulations' => $faker->text(),
        'custom_properties' => $faker->text(),
        'generated_conversions' => $faker->text(),
        'responsive_images' => $faker->text(),
        'order_column' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Video::class, static function (Faker\Generator $faker) {
    return [
        'video_link' => $faker->sentence,
        'service_id' => $faker->randomNumber(5),
        'order' => $faker->randomNumber(5),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
