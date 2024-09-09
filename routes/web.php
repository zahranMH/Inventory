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
Route::resource('/Jenis', JenisController::class)->middleware('is_admin');
Route::resource('/Barang', BarangController::class)->middleware('is_admin');
Route::resource('/Supplier', SupplierController::class)->middleware('is_admin');
Route::resource('/BarangMasuk', BarangMasukController::class)->middleware('auth');
Route::resource('/BarangKeluar', BarangKeluarController::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// cetak pdf
Route::get("/donwload_barangMasuk", [BarangMasukController::class, 'donwload'])->middleware('auth');
Route::get("/cetak_barangMasuk", [BarangMasukController::class, 'cetak'])->middleware('auth');

Route::get("/donwload_barangKeluar", [BarangKeluarController::class, 'donwload'])->middleware('auth');
Route::get("/cetak_barangKeluar", [BarangKeluarController::class, 'cetak'])->middleware('auth');

// cetak struk barang keluar
Route::get('/struk_barangKeluar/{id}', [BarangKeluarController::class, 'cetakStruk'])->middleware('auth');



