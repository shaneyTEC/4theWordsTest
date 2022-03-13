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

//leyend

// go to homepage
Route::get('/', function () {
    return view('leyends');
});

//display leyends list
Route::get('/leyends', function () {
    return view('leyends');
});

//Add a new leyend
Route::get('/leyend/add', function () {
    return view('add-leyend');
});

//Location


/***********************
**** Dynamic routes ****
***********************/

//Edit a leyend
Route::get('/leyend/{id}/edit', function () {
    return view('add-leyend/{id}');
});

//display leyend details 
Route::get('leyend/{id}', function ($id) {
    return "Leyend detail: {$id}";
})->where('id', '[0-9]+');

