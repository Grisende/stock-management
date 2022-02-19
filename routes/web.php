<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('products')->group(function (){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'list']);
    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'getById']);
    Route::post('/{isApi}', [\App\Http\Controllers\ProductController::class, 'create']);
    Route::put('/{id}', [\App\Http\Controllers\ProductController::class, 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\ProductController::class, 'delete']);
});
