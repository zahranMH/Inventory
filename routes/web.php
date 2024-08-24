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
Route::get('/', [LoginController::class, 'index']);
Route::post('/actionlogin', [LoginController::class, 'actionLogin']);
Route::get('/actionlogout', [LoginController::class, 'actionLogout']);

Route::resource('/User', UserController::class);
Route::resource('/Jenis', JenisController::class);
Route::resource('/Barang', BarangController::class);
Route::resource('/Supplier', SupplierController::class);
Route::resource('/BarangMasuk', BarangMasukController::class);
Route::resource('/BarangKeluar', BarangKeluarController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);

