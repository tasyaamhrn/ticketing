<?php

use App\Http\Controllers\auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\booking;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/booking', [booking::class, 'store'])->name('booking.store');
Route::get('/booking/{id}', [booking::class, 'index']);
Route::GET('/pdf/{id}',[booking::class,'exportPDF'])->name('booking.pdf');
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', function () {
    return view('landing');
});
Route::group(['middleware'], function () {
    Route::put('booking/edit/{id}',[booking::class,'update'])->name('booking.update');
    Route::get('/dashboard', [booking::class, 'show']);
    Route::delete('booking/delete/{id}',[booking::class,'destroy'])->name('booking.destroy');
    Route::GET('/pdfall',[booking::class,'exportPDFall'])->name('bookingall.pdf');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

