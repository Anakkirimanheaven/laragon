<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('tes', function() {
//     return view('layouts.front');
// });


//route admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    //Route selanjutnya ...
});

//route frontend
Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);
