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
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('Home');

// Customer auth
Route::get('/customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/login', [CustomerController::class, 'login'])->name('customer.login');
Route::post('/customer/login/submit', [CustomerController::class, 'loginSubmit'])->name('customer.login.submit');

// Frontend pages
Route::get('/Brand', [FrontendBrandController::class, 'brand'])->name('customer.brand');
Route::get('/Brand/Items/{id}', [FrontendBrandController::class, 'brands'])->name('customer.brands');

// Product single page
Route::get('/product/details/{id}', [FrontendProductController::class, 'view'])->name('product.details');

// Product list page
Route::get('/product/list', [FrontendProductController::class, 'listview'])->name('product.listview');

// Add to cart
Route::get('/addtocart/{product}', [OrderConteoller::class, 'addtocart'])->name('addto.cart');

// Customer protected routes
Route::group(['middleware' => 'customerg'], function () {
    Route::post('/customer/logout', [CustomerController::class, 'logout'])->name('customer.logout');
    Route::get('/cart/view', [OrderConteoller::class, 'view'])->name('cart.view');
    Route::get('cart/checkout', [OrderConteoller::class, 'checkout'])->name('cart.checkout');
    Route::get('/customer/profile', [CustomerController::class, 'profile'])->name('customer.profile');
    Route::post('/placeorder/store', [OrderConteoller::class, 'storeaddorder'])->name('placeorder.store');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    // Authentication Routes
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/submit', [AuthController::class, 'loginsubmit'])->name('login.submit');

    // Admin protected routes
    Route::middleware(['auth'])->group(function () {
        // Logout
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

        // Dashboard Routes - Multiple routes for same dashboard
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        
        // Profile Routes
        Route::prefix('profile')->group(function () {
            Route::get('/', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
            Route::put('/', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
        });

        // Category Routes
        Route::prefix('categories')->group(function () {
            Route::get('/', [CategoryController::class, 'list'])->name('category.list');
            Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
            Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        });

        // Product Routes
        Route::prefix('products')->group(function () {
            Route::get('/', [ProductController::class, 'list'])->name('product.list');
            Route::get('/create', [ProductController::class, 'create'])->name('product.create');
            Route::post('/store', [ProductController::class, 'store'])->name('product.store');
            Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
            Route::get('/view/{id}', [ProductController::class, 'view'])->name('product.view');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
            Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
        });

        // Brand Routes
        Route::prefix('brands')->group(function () {
            Route::get('/', [BrandController::class, 'list'])->name('brand.list');
            Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
            Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
            Route::get('/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
            Route::post('/update/{id}', [BrandController::class, 'update'])->name('brand.update');
        });

        // Order Management Routes
        Route::prefix('orders')->group(function () {
            Route::get('/', [OrderListController::class, 'index'])->name('order.list');
            Route::get('/view/{id}', [OrderListController::class, 'show'])->name('order.view');
            Route::get('/status/update/{id}/{status}', [OrderListController::class, 'updateStatus'])->name('order.status.update');
            Route::post('/{order}/status-history', [OrderListController::class, 'statusHistory'])->name('orders.status.history');
            Route::post('/{order}/confirm', [OrderListController::class, 'confirm'])->name('orders.confirm');
            Route::post('/{order}/cancel', [OrderListController::class, 'cancel'])->name('orders.cancel');
            Route::post('/bulk-update', [OrderListController::class, 'bulkUpdate'])->name('orders.bulk-update');
            Route::get('/export', [OrderListController::class, 'export'])->name('orders.export');
        });
    });
});