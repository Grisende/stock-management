<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('products')->group(function (){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'getById']);
    Route::post('/', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::put('/{id}', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);
});

Route::prefix('withdraws')->group(function (){
   Route::get('/', [\App\Http\Controllers\WithdrawController::class, 'list']);
   Route::get('/{id}', [\App\Http\Controllers\WithdrawController::class, 'getById']);
   Route::post('/', [\App\Http\Controllers\WithdrawController::class, 'create']);
   Route::put('/', [\App\Http\Controllers\WithdrawController::class, 'update']);
});
