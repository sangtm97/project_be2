<?php

use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProductDetailController;

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

Route::get('/', [Maincontroller::class, 'index']);

Route::get('/listproduct', [ListProductController::class, 'index']);


Route::get('/wishlist', [WishlistController::class, 'index']);
Route::get('/productdetail', [ProductDetailController::class, 'index']);
Route::get('/', function () {
    return view('home');
});

