<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Food;
use \App\Models\Ingredient;
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
            Ingredient::create([
                'id' => $i,
                'name' => $faker->word,
                'calories' => $faker->numberBetween(100, 1000),
                'description' => $faker->sentence,
                'image' => $faker->imageUrl(640, 480, 'ingredient'),
            ]);
        }
        for ($i = 0; $i < 20; $i++) {
            Food::create([
                'id' => $i,
                'name' => $faker->name,
                'calories' => $faker->numberBetween(100, 1000),
                'description' => $faker->text,
                'image' => $faker->imageUrl(640, 480, 'food'),
                'rating' => $faker->numberBetween(1, 5),
                'duration' => $faker->numberBetween(1, 10),
                'procedure' => $faker->text,
            ]);
        }

        // create seeder by attaching ingredient and food
        for ($i = 0; $i < 20; $i++) {
            Food::find($i)->ingredients()->attach(Ingredient::all()->random($faker->numberBetween(1, 5)), ['quantity' => $faker->numberBetween(1, 5)]);
        }
    }
}
