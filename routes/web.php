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
    return view('index');
});
Route::get('product', [ CartController::class, 'index']);
Route::get('addCart/{id}', [ CartController::class, 'addCart']);
Route::get('deleteCart/{id}', [ CartController::class, 'deleteCart']);
Route::get('totalCart', [ CartController::class, 'totalCart']);
Route::get('removeCart/{id}', [ CartController::class, 'removeCart']);




