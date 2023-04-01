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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware('guest')->namespace('Frontend')->name('frontend')->group(function (){
    Route::get('dangky', [HomeController::class, 'dangky'])->name('dangky');
});
