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

//local routes

/**********************
**** Static Routes ****
**********************/

// go to homepage example
Route::get('/', function () {
    return view('index');
});

//display leyends list
Route::get('/leyends', 'App\Http\Controllers\LeyendController@index', 'index');

//display locations list
Route::get('/locations', 'App\Http\Controllers\LocationController@index', 'index');
