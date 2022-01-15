<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    //
    public function index()
    {
        $foods = Food::orderByDesc('rating')->take(5)->get();

        // dd($foods);

        return view("recommendation.index", compact('foods'));
    }

    public function show(Food $food)
    {

        // dd($food);

        return view("recommendation.detail", compact('food'));
    }
}
