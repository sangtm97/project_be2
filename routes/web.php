<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\SocialController;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login'); 
Route::post('admin/users/login/store',[LoginController::class,'store']); 

Route::middleware(['auth'])->group(function () {
    Route::get('admin',[MainController::class,'index'])->name('admin');
    Route::get('admin/main',[MainController::class,'index']);
});

Route::get('/getInfo-facebook/{social}', 'SocialController@getInfo');

Route::get('/check-info-facebook/{social}', 'SocialController@checkInfo');
