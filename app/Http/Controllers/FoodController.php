<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function index()
    {
        $foods = Food::all();

        if (request('search')) {
            $foods = Food::where('name', 'LIKE', '%' . request('search') . '%')->get();
        }

        return view('food.index', compact('foods'));
    }

    public function show(Food $food)
    {
        // dd($food);
        return view("food.detail", compact('food'));
    }

    public function create()
    {
        $ingredients = Ingredient::all();

        return view('food.create', compact('ingredients'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $destinationPath = 'images/';
        $fileName = date("Ymd_His") . '.' . $request->image->extension();
        $request->image->move($destinationPath, $fileName);

        $food = new Food();
        $food->name = $request->name;
        $food->description = $request->description;
        $food->calories = $request->calories;
        $food->rating = $request->rating;
        $food->duration = $request->duration;
        $food->procedure = $request->procedure;
        $food->image = "/" . $destinationPath . $fileName;

        $food->save();

        $food->ingredients()->attach($request->field_name);


        return redirect('/food');
    }

    public function destroy(Food $food)
    {
        Food::where('id', $food->id)->delete();

        return back();
    }
}
