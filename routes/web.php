<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

// login
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/actionlogin', [LoginController::class, 'actionLogin'])->name('login.post')->middleware('guest');
Route::get('/actionlogout', [LoginController::class, 'actionLogout'])->middleware('auth');

Route::resource('/User', UserController::class)->middleware('is_admin');
Route::resource('/Jenis', JenisController::class)->middleware('auth');
Route::resource('/Barang', BarangController::class)->middleware('auth');
Route::resource('/Supplier', SupplierController::class)->middleware('auth');
Route::resource('/BarangMasuk', BarangMasukController::class)->middleware('auth');
Route::resource('/BarangKeluar', BarangKeluarController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

