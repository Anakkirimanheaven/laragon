<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('tes', function() {
//     return view('layouts.front');
// });


//route backend / admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UserController::class);
});

//route frontend
Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('detail', [FrontController::class, 'detail']);
Route::get('privacy', [FrontController::class, 'privacy']);
Route::get('cart', [FrontController::class, 'cart']);
Route::get('wishlist', [FrontController::class, 'wishlist']);
Route::get('produk', [FrontController::class, 'produk']);
Route::get('blog', [FrontController::class, 'blog']);
Route::get('dblog', [FrontController::class, 'dblog']);
Route::get('user', [FrontController::class, 'user']);
Route::get('faq', [FrontController::class, 'faq']);
Route::get('compaire', [FrontController::class, 'compaire']);
Route::get('vendor', [FrontController::class, 'vendor']);
Route::get('cempty', [FrontController::class, 'cempty']);
Route::get('wempty', [FrontController::class, 'wempty']);
Route::get('sideseller', [FrontController::class, 'sideseller']);
Route::get('seller', [FrontController::class, 'seller']);
Route::get('order', [FrontController::class, 'order']);
Route::get('terms', [FrontController::class, 'terms']);
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('flashsale', [FrontController::class, 'flashsale']);


