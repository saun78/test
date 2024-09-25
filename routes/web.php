<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//display
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('login', function(){
    return view('login');
});
Route::get('register', function(){
    return view('register');
});

//function
Route::post('register', [usercontroller::class ,'register'])->name('register');
Route::post('login', [usercontroller::class ,'login'])->name('login');

Route::get('index', [ProductController::class ,'product']);
Route::get('product/{id}', [ProductController::class ,'show'])->name('show');