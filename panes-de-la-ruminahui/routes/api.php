<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class,'index']);
    Route::get('/', [ProductController::class,'show']);
    Route::post('/', [ProductController::class,'store']);
});
