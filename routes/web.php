<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthController;


// Đăng nhập
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');            // Hiển thị form login
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');    // Xử lý submit login
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');         // Đăng xuất

// Đăng ký
Route::get('/register', [AuthController::class, 'showSignupForm'])->name('register');// Hiển thị form đăng ký
Route::post('/register', [AuthController::class, 'handleSignup'])->name('register.submit');// Xử lý đăng ký
Route::get('activate-account/{token}', [AuthController::class, 'activateAccount'])->name('activate.account');  // Kích hoạt tài khoản

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/products', function () {
    return view('frontend.products');
})->name('products');

Route::get('/promotions', function () {
    return view('frontend.promotions');
})->name('promotions');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');


