<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{name}', function () {
    return view('contact');
});
