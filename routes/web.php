<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [\App\Http\Controllers\LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [\App\Http\Controllers\LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/mahasiswa', \App\Http\Controllers\MahasiswaController::class);
Route::resource('/aspirasi', \App\Http\Controllers\AspirasiController::class);
Route::resource('/berkas_program', \App\Http\Controllers\BerkasProgramController::class);
Route::resource('/presensi_piket', \App\Http\Controllers\PresensiPiketController::class);
Route::resource('/uang_kas', \App\Http\Controllers\UangKasController::class);
