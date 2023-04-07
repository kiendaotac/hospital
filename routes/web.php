<?php

use App\Http\Controllers\Forntend\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('blog', [HomeController::class, 'blogs'])->name('blog');
Route::get('post/{slug}', [HomeController::class, 'post'])->name('post');
Route::get('doctor', [HomeController::class, 'doctors'])->name('doctor');
Route::get('doctor_detail/{id}', [HomeController::class, 'doctor_detail'])->name('doctor_detail');
Route::middleware('guest')->namespace('Frontend')->name('frontend')->group(function (){


});
