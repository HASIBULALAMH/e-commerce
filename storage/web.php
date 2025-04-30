<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// frontend Routes
Route::get('/',[HomeController::class,'index'])->name('Home');





//Backend Routes
//Routes group for admin panel
Route::group(['prefix' => 'admin'], function () {

    //Authentication Routes
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/submit', [AuthController::class, 'loginsubmit'])->name('login.submit');

    // Middleware for authentication
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        //Dashboard Routes
        Route::get('/', [DashboardController::class, 'dashboard'])->name('deshboard');

        //Category Routes
        Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        //Product Routes
        Route::get('/product/list', [ProductController::class, 'list'])->name('product.list');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('/product/view/{id}', [ProductController::class, 'view'])->name('product.view');

        //Brand Routes
        Route::get('/brand/list', [BrandController::class, 'list'])->name('brand.list');
        Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
    });
});
