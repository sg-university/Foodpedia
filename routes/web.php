<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/choose', function () {
    return view('choose');
});

Route::get('/recommendation/index', function () {
    return view('recommendation.index');
});

Route::get('/recommendation/detail', function () {
    return view('recommendation/detail');
});

Route::get('/find/index', function () {
    return view('find.index');
});

Route::post('/find/result', function () {
    return redirect('find.result');
});
