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
Route::get('danhmuc/{slug}', [HomeController::class, 'getCategory'])->name('danhmuc');
Route::get('doi-ngu-bac-si', [HomeController::class, 'doctors'])->name('doi-ngu-bac-si');
Route::get('doctor_detail/{id}', [HomeController::class, 'doctor_detail'])->name('doctor_detail');
Route::get('dichvu', [HomeController::class, 'dichvu'])->name('dichvu');
Route::get('lienhe', [HomeController::class, 'contact'])->name('lienhe');
Route::middleware('guest:customer')->namespace('Frontend')->name('frontend.')->group(function (){
    Route::post('customer/login', [\App\Http\Controllers\Frontend\LoginController::class, 'login'])->name('customer.login');
    Route::get('customer/login', [\App\Http\Controllers\Frontend\LoginController::class, 'getLogin'])->name('customer.getLogin');
});
Route::middleware('auth:customer')->namespace('Frontend')->name('frontend.')->group(function () {
    Route::get('lichsukham', [HomeController::class, 'history'])->name('lichsukham');
    Route::get('customer/logout', [\App\Http\Controllers\Frontend\LoginController::class, 'logout'])->name('customer.logout');
});

Route::get('test', function () {
    return redirect()->route('frontend.lichsukham');
    return redirect()->route('frontend.customer.getLogin')->with('welcome', '<h2>Cảm ơn bạn,</h2> đã đăng ký lịch khám chữa bệnh tại HỆ THỐNG PHÒNG KHÁM SẢN PHỤ KHOA - IVF TINA. Bạn có thể đăng nhập để tra cứu thông tin ngày giờ khám. Sử dụng user và mật khẩu đăng nhập mặc định là ngày tháng năm sinh của bạn. VD: 30041975');
});

Route::fallback(function() {
    abort(404, 'Đường dẫn bạn nhập không tồn tại. Vui lòng kiểm tra lại');
});
