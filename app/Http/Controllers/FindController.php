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
        // $request->all();
        // dd("asd");
        // dd($request->field_name);

        // $foodIngredients = FoodIngredient::with('foods', 'ingredients')
        // // ->whereRelation('ingredients', 'ingredient_name', '=', 'Susu')
        // ->orderByDesc('id')
        // ->get();

        // $foodIngredients = DB::table('food_ingredient')
        // ->join('ingredient', 'ingredient.id', '=', 'food_ingredient.ingredient_id')
        // // foreach($request->all()?)
        // // foreach('')
        // // ->where('ingredient_name', 'like', 'telur')
        // ->select('food_ingredient.id', 'food_ingredient.ingredient_id', 'ingredient.ingredient_name')
        // ->orderBy('food_ingredient.id')
        // ->get();

        // $foodIngredients = FoodIngredient::whereHas('ingredients')
        // ->with('ingredients')->get();

        // $foodIngredients = DB::table('food_ingredient')
        // ->join('ingredient', 'food_ingredient.ingredient_id', '=', 'ingredient.id')
        // ->join('food', 'food_ingredient.food_id', '=', 'food.id')
        // ->get();
        // dd($request->field_name);
        if ($request->field_name == NULL) {
            $foods = Food::where('id', 0);
        } else if ($request->all()) {

            $foods = Food::with('ingredients');
            // ->whereRelation('ingredients', 'ingredient_name', 'like', 'Kacang')
            // ->whereRelation('ingredients', 'ingredient_name', 'like', 'Susu')
            // ->get();
            // ->where('id', 2)
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
