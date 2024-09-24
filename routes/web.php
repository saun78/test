<?php

use App\Models\User;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Route;

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

Route::post('register', [usercontroller::class ,'register'])->name('register');
Route::post('login', [usercontroller::class ,'login'])->name('login');