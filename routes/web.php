<?php

use App\Http\Controllers\ListProductController;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\WishlistController;
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

Route::get('/', [Maincontroller::class, 'index']);

Route::get('/listproduct', [ListProductController::class, 'index']);

Route::get('/wishlist', [WishlistController::class, 'index']);
Route::get('/productDetail', [ProductDetailController::class, 'index']);
// Route::get('/', function () {
//     return view('home');
// });