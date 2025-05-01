<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::get('/signin/index', [AuthController::class, 'index'])->name('auth.signin.show');
Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{name}', function () {
    return view('contact');
});
