<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodIngredient extends Model
{
    use HasFactory;

    protected $table = 'food_ingredient';

    protected $guarded = ['id'];

    public function ingredients()
    {
        // [ingredient] many-to-many food
        // food one-to-many food_ingredient many-to-one ingredient
        return $this->hasMany(Ingredient::class, 'food_ingredient', 'ingredient_id', 'id');
    }

    public function foods()
    {
        // [ingredient] many-to-many food
        // food one-to-many food_ingredient many-to-one ingredient
        return $this->hasMany(Food::class, 'food_ingredient', 'food_id', 'id');
    }
}
