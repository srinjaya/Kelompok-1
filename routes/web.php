<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekakses:admin']], function () {
        Route::resource('admin', ProductController::class);
    });
    //Route::resource('/products', \App\Http\Controllers\ProductController::class);
    Route::group(['middleware' => ['cekakses:pegawai']], function () {
        Route::resource('pegawai', ProductController::class);
    });
});