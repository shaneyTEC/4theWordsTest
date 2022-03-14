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

/**********************
**** Static Routes ****
**********************/

// go to homepage example
Route::get('/', 'App\Http\Controllers\LeyendController@index');

//display leyends list
Route::get('/leyends', 'App\Http\Controllers\LeyendController@index');

//display locations list
Route::get('/locations', 'App\Http\Controllers\LocationController@index');

//display leyends list Filter
Route::get('/leyend/{id}/filter', 'App\Http\Controllers\LeyendController@indexFilterbyProvince');

/**********************
********* Post ********
***********************/

//Add a create leyend
Route::post('/leyends', 'App\Http\Controllers\LeyendController@store');

//Add a display leyend form
Route::get('/leyend/add', 'App\Http\Controllers\LeyendController@add');

//Add a create leyend
Route::get('/leyend/{id}/delete', 'App\Http\Controllers\LeyendController@delete');

/***********************
**** Dynamic routes ****
***********************/

//Edit a leyend
Route::get('/leyend/{id}/edit', 'App\Http\Controllers\LeyendController@edit')->where('id', '[0-9]+');

//display leyend details 
Route::get('/leyend/{id}', 'App\Http\Controllers\LeyendController@show')->where('id', '[0-9]+');
