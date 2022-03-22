<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeyendController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Api routes

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/leyends', [LeyendController::class, 'index']);

Route::get('/locations', [LocationController::class, 'index']);

Route::post('/leyend', [LocationController::class, 'postLeyend']);

Route::put('/leyend/{id}/detail', [LocationController::class, 'putLeyend'])->where('id', '[0-9]+');

Route::delete('/leyend/{id}/delete',  [LocationController::class, 'deleteLeyend']);
