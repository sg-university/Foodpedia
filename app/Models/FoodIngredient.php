<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FoodIngredient extends Pivot
{
    use HasFactory;

    protected $table = 'food_ingredient';
    protected $guarded = [];
    public $incrementing = true;

    public function food()
    {
        // [food_ingredient] many-to-one food
        return $this->belongsTo(Keyboard::class, 'food_id');
    }

    public function ingredient()
    {
        // [food_ingredient] many-to-one ingredient
        return $this->belongsTo(Ingredient::class, 'ingredient_id');
    }
}
