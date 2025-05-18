<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Container\Attributes\Auth;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/signin/show', function(){
    return view('signin');
})->name('auth.signin.show');

Route::get('/signup/show', function(){
    return view('signup');
})->name('auth.signup.show');


Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth')->name('auth.profile.show');

Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');

Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('course', CourseController::class);

Route::post('/cart/add/{id}', [CartController::class, 'add'])->middleware('auth')->name('cart.add');

