<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;

    //Routes group for admin panel
Route::group(['prefix' => 'admin'], function(){

   
    //Authemtication Routes
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/submit', [AuthController::class, 'loginsubmit'])->name('login.submit');

        // Middleware for authentication
        
        route::group(['middleware'=>'auth'], function(){
            Route::get('/logout',[AuthorCollection::class,'logout'])->name('logout');



        //    //Dashboard Routes
        Route::get('/', [DashboardController::class, 'dashboard'])->name('deshboard');


        //category Routes
        Route::get('/category/list', [CategoryController::class, 'list'])->name('category_list');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category_create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category_store');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category_delete');

        //product Routes

        Route::get('/product/list', [ProductController::class, 'list'])->name('product_list');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product_create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product_store');
        Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product_delete');

        //Brand Routes
        Route::get('/Brand/list', [BrandController::class, 'list'])->name('brand_list');
        Route::get('/Brand/create', [BrandController::class, 'create'])->name('brand_create');
        Route::post('/Brand/store', [BrandController::class, 'store'])->name('brand_store');
            
        });


  

});

