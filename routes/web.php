<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TaskTwoController;
use App\Http\Controllers\TaskThreeController;
use App\Http\Controllers\TaskFourController;

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
    return view('welcome');
})->name('home');

Route::prefix('task1')->group(function () {
    Route::get('/items', [ItemController::class, 'index'])->name('task1');
    Route::get('/items/item/{id}', [ItemController::class, 'item_detail'])->name('item-detail');
    Route::get('/items/add-to-cart/{id}', [ItemController::class, 'add_to_cart'])->name('add-to-cart');
    Route::get('/items/my-cart', [ItemController::class, 'my_cart'])->name('my-cart');
    Route::get('/items/my-cart/empty', [ItemController::class, 'empty_cart'])->name('empty-cart');
});

Route::prefix('task2')->group(function () {
    Route::get('/', [TaskTwoController::class, 'index'])->name('task2');
});

Route::prefix('task3')->group(function () {
    Route::get('/article', [TaskThreeController::class, 'index'])->name('task3');
    Route::get('/article/{id}', [TaskThreeController::class, 'article_detail'])->name('article-detail');
});

Route::prefix('task4')->group(function () {
    Route::get('/', [TaskFourController::class, 'index'])->name('task4');
});
