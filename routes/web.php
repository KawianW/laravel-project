<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
//middleware group, laravel website middleware. routes protected
Route::get('/cart{id}',         [ProductController::class, 'addToCart'])->name('addToCart')->middleware('auth');
Route::get('/reduce{id}',       [ProductController::class, 'getReduceByOne'])->name('reduceByOne');
Route::get('/add{id}',          [ProductController::class, 'getAddByOne'])->name('addByOne');
Route::get('/remove{id}',       [ProductController::class, 'getRemoveItem'])->name('remove');
Route::get('/cart',             [ProductController::class, 'getCart'])->name('cart');
Route::get('/shopping-cart',    [ProductController::class, 'getCheckout'])->name('getShoppingCart');
Route::post('/shopping-cart',   [ProductController::class, 'postCheckout'])->name('postShoppingCart');
Route::post('/categories',      [ProductController::class, 'filter'])->name('categories');
Route::get('/',                 [ProductController::class, 'index'])->name('index');

Route::get('/logout',           [LoginController::class, 'logout'])->name('own_logout');

// require __DIR__ . '/auth.php';

Auth::routes();