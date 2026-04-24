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
Route::put('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);

Route::get('/clientes', [ClienteController::class, 'index']);

Route::post('/cliente', [ClienteController::class, 'store']);
Route::put('/cliente/{cliente}', [ClienteController::class, 'update']);
Route::delete('/cliente/{cliente}', [ClienteController::class, 'destroy']);
Route::get('/clientes/{cliente}/proyectos', [ClienteController::class, 'proyectos']);






