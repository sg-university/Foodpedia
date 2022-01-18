<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Food;
use \App\Models\Ingredient;
use \App\Models\FoodIngredient;
use \App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $ingredientData = ['Saus', 'Cabai', 'Tomat', 'Kacang', 'Susu', 'Telur', 'Garam', 'Gula', 'Tepung', 'Maizena', 'Minyak', 'Daging Ayam', 'Ikan', 'Lengkuas', 'Bawang Merah', 'Bawang Putih', 'Bawang Bombay', 'Margarin', 'Kecap'];

        $ingredientDataCount = count($ingredientData);
        for ($i = 100; $i < 100 + $ingredientDataCount; $i++) {
            Ingredient::create([
                'id' => $i + 1,
                'ingredient_name' => $ingredientData[$i - 100],
            ]);
        }

        for ($i = 101; $i <= 120; $i++) {
            Food::create([
                'id' => $i,
                'name' => $faker->name,
                'calories' => $faker->numberBetween(100, 1000),
                'description' => $faker->text,
                'image' => 'https://picsum.photos/640/480',
                'rating' => $faker->numberBetween(1, 5),
                'duration' => $faker->numberBetween(1, 10),
                'procedure' => $faker->text,
            ]);
        }


        for ($i = 0; $i < 20 * 4; $i++) {
            $x = ($i % 20) + 101;
            Food::find($x)->ingredients()->attach(Ingredient::all()->random($faker->unique(true)->numberBetween(1, $ingredientDataCount))->first());
        }

        User::create([
            'email' => "admin@mail.com",
            'password' => Hash::make('admin'),
            'role' => 'Admin',
            'name' => 'Admin'
        ]);

        User::create([
            'email' => "member@mail.com",
            'password' => Hash::make('member'),
            'role' => 'Member',
            'name' => 'Member'
        ]);
    }
}
