<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
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
//Home
Route::get('/',[DashboardController::class,'index'])->name('Dashboard');

//Product
Route::prefix('/product')->group(function(){

    Route::get('/',[ProductController::class,'index'])->name('product');
    Route::post('/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/{task_id}/delete',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/{task_id}/editStatus',[ProductController::class,'editStatus'])->name('product.editStatus');

    Route::get('/{task_id}/edit',[ProductController::class,'edit'])->name('product.edit');

});


//banner
Route::prefix('/banner')->group(function(){

    Route::get('/',[ProductController::class,'index'])->name('banner');
    Route::post('/store',[ProductController::class,'store'])->name('banner.store');
    Route::get('/{banner_id}/delete',[ProductController::class,'delete'])->name('banner.delete');
    Route::get('/{banner_id}/editStatus',[ProductController::class,'editStatus'])->name('banner.editStatus');

    Route::get('/{banner_id}/edit',[ProductController::class,'edit'])->name('banner.edit');

});
