<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');


//Admin : Main Page
Route::get('/admin-area', [AdminController::class, 'index'])->middleware('auth');



// Route untuk Rumah Sakit
Route::resource('/admin-area/rumah-sakits', RumahSakitController::class)->middleware('auth');

// Route untuk Pasien


Route::resource('admin-area/pasiens', PasienController::class)->middleware('auth');