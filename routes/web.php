<?php

use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//display
Route::get('index', function () {
    return view('index');
});
Route::get('login', function(){
    return view('login');
});
Route::get('register', function(){
    return view('register');
});
Route::get('cart_list', function(){
    return view('cart_list');
});

//function
Route::post('register', [usercontroller::class ,'register'])->name('register');
Route::post('login', [usercontroller::class ,'login'])->name('login');


Route::get('index', [ProductController::class ,'product']);
Route::get('product/{id}', [ProductController::class ,'show'])->name('show');


Route::get('cart_list', [cartController::class ,'cart_list']);
Route::post('/product/{id}', [cartcontroller::class ,'add_to_cart'])->name('add_to_cart');
Route::post('checkout', [cartcontroller::class ,'checkout'])->name('checkout');
Route::get('checkout', [cartcontroller::class ,'checkout_show'])->name('checkout_show');