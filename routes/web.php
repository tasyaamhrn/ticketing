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
Route::get('/dashboard', [booking::class, 'show']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::delete('booking/delete/{id}',[booking::class,'destroy'])->name('booking.destroy');
Route::get('/', function () {
    return view('landing');
});
