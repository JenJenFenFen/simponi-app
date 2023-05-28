<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// admin
Route::get('/', [AdminController::class, 'main']);
Route::get('/daftar-mahasiswa', [AdminController::class, 'daftarMahasiswa'])->name('daftarMahasiswa');
Route::post('/send-mahasiswa', [AdminController::class, 'sendMahasiswa'])->name('sendMahasiswa');
Route::get('/daftar-dosen', [AdminController::class, 'daftarDosen'])->name('daftarDosen');
Route::post('/send-dosen', [AdminController::class, 'sendDosen'])->name('sendDosen');
Route::get('/daftar-kelas', [AdminController::class, 'daftarKelas'])->name('daftarKelas');