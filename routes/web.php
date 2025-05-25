<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\ListItem;
use App\Http\Middleware\AdminMiddleware;

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


Route::get('/user/profile', [ProfileController::class, 'show'])->middleware('auth')->name('auth.user.profile.show');

Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

Route::get('/signin', [AuthController::class, 'signin'])->name('auth.signin');

Route::get('/signup', [AuthController::class, 'signup'])->name('auth.signup');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('course', CourseController::class);

Route::resource('admin', AdminController::class)->middleware([AdminMiddleware::class . ':admin'])->only([
    'index'
]);
Route::post('/cart/add/{id}', [CartController::class, 'add'])->middleware('auth')->name('cart.add');

Route::delete('/cart/remove/{course_id}', [CartController::class, 'remove'])->middleware('auth')->name('cart.remove');

Route::get('/cart/checkout', [CartController::class, 'checkout'])->middleware('auth')->name('cart.checkout');

Route::get('/user/courses', [UserController::class, 'showYourCourses'])->name('auth.user.courses');

Route::post('/course/buynow/{id}', [CartController::class, 'buynow'])->middleware('auth')->name('course.buynow');