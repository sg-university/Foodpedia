<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\FoodController;

use App\Models\Ingredient;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [LoginController::class, 'index'])->middleware('guest');

Route::get('/home', function () {
    return view('home');
});

Route::get('/choose', function () {
    return view('choose');
});

Route::get('/chooseAdmin', function () {
    return view('admin.choose');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/recommendation', [RecommendationController::class, 'index']);
Route::get('/recommendation/detail/{food}', [RecommendationController::class, 'show']);

Route::get('/find', [FindController::class, 'search']);
Route::get('/find/detail/{food}', [FindController::class, 'show']);

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/detail/{food}', [FoodController::class, 'show']);
Route::get('/createFood', [FoodController::class, 'create']);
Route::post('/createFood', [FoodController::class, 'store']);
Route::post('/deleteFood/{food}', [FoodController::class, 'destroy']);



Route::get('/ingredient', [IngredientController::class, 'index']);
Route::get('/createIngredient', [IngredientController::class, 'create']);
Route::post('/createIngredient', [IngredientController::class, 'store']);
Route::post('/deleteIngredient/{ingredient}', [IngredientController::class, 'destroy']);



// Route::post('/find/result', [FindController::class, 'search']);
