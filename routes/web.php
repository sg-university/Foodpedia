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

Route::get('/home',  function () {
    return view('home');
})->middleware('auth');

Route::get('/choose', function () {
    return view('recommendation.choose');
})->middleware('auth');

Route::get('/chooseAdmin', function () {
    return view('admin.choose');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/recommendation', [RecommendationController::class, 'index'])->middleware('auth');
Route::get('/recommendation/detail/{food}', [RecommendationController::class, 'show'])->middleware('auth');

Route::get('/find', [FindController::class, 'search'])->middleware('auth');
Route::get('/find/detail/{food}', [FindController::class, 'show'])->middleware('auth');

Route::get('/food', [FoodController::class, 'index'])->middleware('auth');
Route::get('/food/detail/{food}', [FoodController::class, 'show'])->middleware('auth');
Route::get('/createFood', [FoodController::class, 'create'])->middleware('auth');
Route::post('/createFood', [FoodController::class, 'store'])->middleware('auth');
Route::post('/deleteFood/{food}', [FoodController::class, 'destroy'])->middleware('auth');



Route::get('/ingredient', [IngredientController::class, 'index'])->middleware('auth');
Route::get('/createIngredient', [IngredientController::class, 'create'])->middleware('auth');
Route::post('/createIngredient', [IngredientController::class, 'store'])->middleware('auth');
Route::post('/deleteIngredient/{ingredient}', [IngredientController::class, 'destroy'])->middleware('auth');



// Route::post('/find/result', [FindController::class, 'search']);
