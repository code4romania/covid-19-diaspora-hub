<?php

use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\EntityController;
use App\Http\Controllers\Api\v1\TypeController;
use Illuminate\Support\Facades\Route;

/**
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::prefix('entities')->name('entities.')->group(function () {
    Route::get('/', [EntityController::class, 'index'])->name('index');
    Route::get('{entity}', [EntityController::class, 'show'])->name('show')->where('entity', '[0-9]+');
    Route::get('search', [EntityController::class, 'search'])->name('search');
});

Route::prefix('types')->name('types.')->group(function () {
    Route::get('/', [TypeController::class, 'index'])->name('index');
    Route::get('{type}', [TypeController::class, 'show'])->name('show')->where('type', '[0-9]+');
});

Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('{category}', [CategoryController::class, 'show'])->name('show')->where('category', '[0-9]+');
});
