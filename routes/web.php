<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('dangky', [HomeController::class, 'dangky'])->name('dangky');
Route::post('dangky', [HomeController::class, 'postdangky'])->name('dangky');
Route::get('gioithieu', [HomeController::class, 'gioithieu'])->name('gioithieu');
Route::get('nhaptelephone', [HomeController::class, 'nhaptelephone'])->name('nhaptelephone');
Route::get('otp/{customer}', [HomeController::class, 'otp'])->name('otp');
Route::post('otp', [HomeController::class, 'postOtp'])->name('postOtp');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('blog', [HomeController::class, 'blogs'])->name('blog');
Route::get('post/{slug}', [HomeController::class, 'post'])->name('post');
Route::get('doctor', [HomeController::class, 'doctors'])->name('doctor');
Route::get('doctor_detail/{id}', [HomeController::class, 'doctor_detail'])->name('doctor_detail');
Route::get('dichvu', [HomeController::class, 'dichvu'])->name('dichvu');
Route::get('lienhe', [HomeController::class, 'contact'])->name('lienhe');
Route::middleware('guest:customer')->namespace('Frontend')->name('frontend.')->group(function (){
    Route::post('customer/login', [\App\Http\Controllers\Frontend\LoginController::class, 'login'])->name('customer.login');
});
Route::middleware('auth:customer')->namespace('Frontend')->name('frontend.')->group(function () {
    Route::get('lichsukham', [HomeController::class, 'history'])->name('lichsukham');
    Route::get('customer/logout', [\App\Http\Controllers\Frontend\LoginController::class, 'logout'])->name('customer.logout');
});
