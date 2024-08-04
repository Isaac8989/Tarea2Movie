<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/movies/{orden}', [App\Http\Controllers\API\MovieController::class, 'listMovies']);
Route::get('/movie/{id}', [App\Http\Controllers\API\MovieController::class, 'showMovie']);
Route::post('/movie', [App\Http\Controllers\API\MovieController::class, 'storeMovie']);
