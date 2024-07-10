<?php

use  App\Http\Controllers\API\LoginRegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/signup',[LoginRegController::class, 'signup']);
Route::post('/signin',[LoginRegController::class, 'signin']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
