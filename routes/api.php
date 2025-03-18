<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::middleware('api')->group(function () {
    Route::get('/cars', [CarController::class, 'index']);
    Route::get('/cars/{car}', [CarController::class, 'show']);
    Route::post('/cars', [CarController::class, 'store']);
    Route::put('/cars/{car}', [CarController::class, 'update']);
    Route::delete('/cars/{car}', [CarController::class, 'destroy']);
});
Route::get('/', function () {
    return response()->json(['message' => 'Rent A Car API is running!'], 200);
});