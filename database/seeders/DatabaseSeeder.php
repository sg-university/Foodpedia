<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Food;
use \App\Models\Ingredient;
use \App\Models\FoodIngredient;
use \App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');

        for ($i = 0; $i < 20; $i++) {
            Food::create([
                // 'id' => $i,
                'name' => $faker->name,
                'calories' => $faker->numberBetween(100, 1000),
                'description' => $faker->text,
                'image' => 'https://picsum.photos/640/480',
                'rating' => $faker->numberBetween(1, 5),
                'duration' => $faker->numberBetween(1, 10),
                'procedure' => $faker->text,
            ]);
        }

        User::create([
            'email' => "admin@admin.com",
            'password' => '$2y$10$rQHVkfWQvLd4RdLpxJ.D6eJoXyImErs5q6Xx1V3wF9lREjZS.jmnW',
            'role' => 'Admin',
            'name' => 'Admin'
        ]);

        User::create([
            'email' => "member@member.com",
            'password' => '$2y$10$rQHVkfWQvLd4RdLpxJ.D6eJoXyImErs5q6Xx1V3wF9lREjZS.jmnW',
            'role' => 'Member',
            'name' => 'Member'
        ]);


        Ingredient::create([
            'id' => 1,
            'ingredient_name' => 'Kacang',
        ]);

        Ingredient::create([
            'id' => 2,
            'ingredient_name' => 'Susu',
        ]);

        Ingredient::create([
            'id' => 3,
            'ingredient_name' => 'Telur',
        ]);

        Ingredient::create([
            'id' => 4,
            'ingredient_name' => 'Garam',
        ]);

        FoodIngredient::create([
            'food_id' => 1,
            'ingredient_id' => 1,
        ]);

        FoodIngredient::create([
            'food_id' => 1,
            'ingredient_id' => 2,

        ]);

        FoodIngredient::create([
            'food_id' => 1,
            'ingredient_id' => 3,
        ]);

        FoodIngredient::create([
            'food_id' => 2,
            'ingredient_id' => 4,
        ]);


        FoodIngredient::create([
            'food_id' => 2,
            'ingredient_id' => 3,
        ]);

        FoodIngredient::create([
            'food_id' => 3,
            'ingredient_id' => 1,
        ]);
    }
}
