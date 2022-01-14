<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    //
    public function index(){
        $ingredients = Ingredient::all();

        return view('ingredient.index', compact('ingredients'));
    }
    
    public function create(){

        return view('ingredient.create');
    }

    public function store(Request $request){
        Ingredient::create([
            'ingredient_name' => $request->ingredient_name
        ]);

        return redirect('/ingredient');
    }

    public function destroy(Ingredient $ingredient){
        Ingredient::where('id', $ingredient->id)->delete();

        return back();
    }
}
