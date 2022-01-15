<?php

namespace App\Http\Controllers;

use App\Models\FoodIngredient;
use App\Models\Food;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindController extends Controller
{
    public function search(Request $request)
    {
        // dd($request->field_name);
        if ($request->field_name == NULL) {
            $foods = Food::where('id', 0);
        } else if ($request->all()) {

            $foods = Food::with('ingredients');
            foreach ($request->field_name as $name) {
                $foods = $foods->whereRelation('ingredients', 'ingredient_name', 'like', $name);
            }

            $foods = $foods->get();
        } else {
            $foods = Food::where('id', 0);
        }

        // dd($foodIngredients);
        return view('find/index', compact('foods'));
    }

    public function show(Food $food)
    {

        return view('find/detail', compact('food'));
    }
}
