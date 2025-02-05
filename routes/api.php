<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/products')->group(function () {
    Route::get('', [ProductController::Class, 'getAll']);
    Route::post('', [ProductController::Class, 'create']);
    Route::prefix('/{id}')->group(function() {
        Route::get('', [ProductController::Class, 'getById']);
        Route::put('', [ProductController::Class, 'update']);
        Route::delete('', [ProductController::Class, 'delete']);
    });
});