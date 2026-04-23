<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/products', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);

Route::get('/clientes', [ClienteController::class, 'index']);

Route::post('/cliente', [ClienteController::class, 'store']);



