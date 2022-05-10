<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SeatController;
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

Route::prefix('product')
    ->name('product.')
    ->controller(ProductController::class)
    ->group(function () {
        Route::put('/{product}/update', 'update')->name('update');
    });

Route::prefix('seat')
    ->name('seat.')
    ->controller(SeatController::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{seat}/order', 'show')->name('show');
    });

Route::prefix('order')
    ->name('order.')
    ->controller(OrderController::class)
    ->group(function (){
        Route::post('/store', 'store');
    });

Route::redirect('/', '/seat');
