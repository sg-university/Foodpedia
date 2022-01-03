<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $table = 'ingredient';
    protected $guarded = [];

    public function ingredients()
    {
        // [ingredient] many-to-many food
        // food one-to-many food_ingredient many-to-one ingredient
        return $this->belongsToMany(Food::class, 'food_ingredient', 'ingredient_id', 'food_id');
    }
}
