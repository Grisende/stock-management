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

Route::post('/adicionar-produtos', [\App\Http\Controllers\ProductController::class, 'createApi']);
Route::get('/baixar-produtos', [\App\Http\Controllers\StockController::class, 'stockReportApi']);
