<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;



Route::get('/',[DashboardController::class,'dashboard']);


//category Routes
Route::get('/category_list',[CategoryController::class,'list']);
Route::get('/category_create',[CategoryController::class,'create']);
Route::post('/category_store',[CategoryController::class,'store']);
Route::get('/category/delete/(id)',[CategoryController::class,'delete']);