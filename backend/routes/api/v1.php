<?php

use App\Http\Controllers\Api\v1\EntityController;
use App\Http\Controllers\Api\v1\CategoryController;
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
    Route::get('{entity}', [EntityController::class, 'show'])->name('show');
});

Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('{category}', [CategoryController::class, 'show'])->name('show');
    Route::get('{category}/entities', [CategoryController::class, 'entities'])->name('entities');
});
