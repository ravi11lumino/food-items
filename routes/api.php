<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\RecipientController;


Route::resource('food-items', FoodItemController::class);
Route::resource('donors', DonorController::class);
Route::resource('recipients', RecipientController::class);
Route::get('donors/{donorId}/food-items', [FoodItemController::class, 'indexByDonor']);
Route::get('/recipients/{recipientId}/food-items', [FoodItemController::class, 'indexByRecipient']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
