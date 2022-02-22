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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::prefix('products')->group(function (){
        Route::get('/form', [\App\Http\Controllers\ProductController::class, 'form']);
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
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');



require __DIR__.'/auth.php';
