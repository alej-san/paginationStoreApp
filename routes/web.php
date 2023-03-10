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


Route::get('/', [App\Http\Controllers\StoreController::class, 'index'])->name('index');
Route::get('item/{item}',  [App\Http\Controllers\StoreController::class, 'show']);
Route::get('uppies', [App\Http\Controllers\StoreController::class, 'uppies']);
Route::post('imagestore', [App\Http\Controllers\StoreController::class, 'imagestore'])->name('imagestore');

