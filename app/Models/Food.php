<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'food';
    protected $guarded = [];

    public function ingredients()
    {
        // food many-to-many [ingredient]
        // food one-to-many food_ingredient many-to-one ingredient
        return $this->belongsToMany(Ingredient::class);
    }
}
