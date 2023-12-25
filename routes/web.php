<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CategoryController;


// learning page
Route::get('/', function(){
    return view('welcome');
});

Route::get('/admin/login', [PageController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [PageController::class, 'adminlogin'])->name('admin.adminlogin');


// Admin dashboard
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [PageController::class, 'logout'])->name('admin.logout');

    //admin category
    Route::resource('/category',CategoryController::class);

    // admin Color
    Route::resource('/color',ColorController::class);

});
