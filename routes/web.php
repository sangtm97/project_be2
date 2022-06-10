
<?php

use App\Http\Controllers\ListProductController;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\CategoryController;

use \App\Http\Controllers\Admin\MainControllers;
use \App\Http\Controllers\Admin\Users\LoginController;

use \App\Http\Controllers\Admin\ProtypeController;
use \App\Http\Controllers\Admin\EndowController;
use \App\Http\Controllers\Admin\ProductController;

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
Route::get('/productDetail/{id}', [ProductDetailController::class, 'show']);

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::group(['middleware' => ['XSS']], function () {
    Route::middleware(['auth'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [MainControllers::class, 'index'])->name('admin');
            Route::get('main', [MainControllers::class, 'index']);

            //Category
            Route::prefix('categories')->group(function () {
                Route::get('add', [CategoryController::class, 'create']);
                Route::post('add', [CategoryController::class, 'store']);
                Route::get('list', [CategoryController::class, 'list'])->name('list');
                //Update category
                Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
                Route::put('{id}/update', [CategoryController::class, 'update'])->name('update');
                // delete
                Route::delete('{id}/destroy', [CategoryController::class, 'destroy'])->name('destroy');
                Route::get('search', [CategoryController::class, 'search'])->name('search');
            });

         //Protype
         Route::prefix('protypes')->group(function (){
            Route::get('add', [ProtypeController::class, 'create']);
            Route::post('add', [ProtypeController::class, 'store']);
            Route::get('list', [ProtypeController::class, 'list'])->name('list');
            Route::get('{id}/edit', [ProtypeController::class, 'edit'])->name('edit');
            Route::put('{id}/update', [ProtypeController::class, 'update'])->name('update');
            Route::delete('{id}/destroy', [ProtypeController::class, 'destroy'])->name('destroy');
        });
        #Endow
        Route::prefix('endows')->group(function (){
            Route::get('add', [EndowController::class, 'create']);
            Route::post('add', [EndowController::class, 'store']);
            Route::get('list', [EndowController::class, 'list'])->name('list');
            Route::get('{id}/edit', [EndowController::class, 'edit'])->name('edit');
            Route::put('{id}/update', [EndowController::class, 'update'])->name('update');
            Route::delete('{id}/destroy', [EndowController::class, 'destroy'])->name('destroy');
        });

        #Product
        Route::prefix('products')->group(function (){
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'list'])->name('list');
            Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
            Route::put('{id}/update', [ProductController::class, 'update'])->name('update');
            Route::delete('{id}/destroy', [ProductController::class, 'destroy'])->name('destroy');
        });
    });
    });
});