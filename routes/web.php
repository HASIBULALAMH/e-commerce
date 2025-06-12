<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\BrandController as FrontendBrandController;
use App\Http\Controllers\frontend\CustomerController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\OrderConteoller;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderListController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;


// frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('Home');

//Customer auth
Route::get('/customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/login/submit', [CustomerController::class, 'login'])->name('customer.login.submit');

//frontend pages
Route::get('/Brand', [FrontendBrandController::class, 'brand'])->name('customer.brand');
Route::get('/Brand/Items/{id}', [FrontendBrandController::class, 'brands'])->name('customer.brands');
//product single page
Route::get('/product/details/{id}', [FrontendProductController::class, 'view'])->name('product.details');

//product list page
Route::get('/product/list', [FrontendProductController::class, 'listview'])->name('product.listview');

//addtocart
Route::get('/addtocart/{product}', [OrderConteoller::class, 'addtocart'])->name('addto.cart');

route::group(['middleware' => 'customerg'], function () {
    //customer login submit
    Route::post('/customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/cart/view', [OrderConteoller::class, 'view'])->name('cart.view');
    Route::get('cart/checkout', [OrderConteoller::class, 'checkout'])->name('cart.checkout');
    Route::get('/customer/profile', [CustomerController::class, 'profile'])->name('customer.profile');
    Route::post('/placeorder/store',[OrderConteoller::class, 'storeaddorder'])->name('placeorder.store');
});

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

        // Order Management Routes
        Route::prefix('orders')->group(function () {
            Route::get('/list', [OrderListController::class, 'list'])->name('orders.list');
            Route::get('/{order}', [OrderListController::class, 'show'])->name('orders.show');
            Route::get('/{order}/status-history', [OrderListController::class, 'statusHistory'])->name('orders.status.history');
            Route::post('/{order}/confirm', [OrderListController::class, 'confirm'])->name('orders.confirm');
            Route::post('/{order}/cancel', [OrderListController::class, 'cancel'])->name('orders.cancel');
            Route::post('/{order}/status', [OrderListController::class, 'updateStatus'])->name('orders.status.update');
            Route::post('/bulk-update', [OrderListController::class, 'bulkUpdate'])->name('orders.bulk-update');
            Route::get('/export', [OrderListController::class, 'export'])->name('orders.export');
        });
    });
});
