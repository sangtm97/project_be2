
<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\ProtypeController;
use \App\Http\Controllers\Admin\EndowController;
use \App\Http\Controllers\Admin\ProductController;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        //Category
        Route::prefix('categories')->group(function (){
            Route::get('add', [CategoryController::class, 'create']);
            Route::post('add', [CategoryController::class, 'store']);
            Route::get('list', [CategoryController::class, 'list'])->name('list');
            Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('{id}/update', [CategoryController::class, 'update'])->name('update');
            Route::delete('{id}/destroy', [CategoryController::class, 'destroy'])->name('destroy');
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