<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('computers', ComputerController::class);

Route::get('categories/active', [CategoryController::class, 'activeCategoriesWithComputers']);

Route::apiResource('categories', CategoryController::class)->where(['category' => '[0-9]+']);

