<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;


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
});
