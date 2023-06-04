<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'main']);
Route::get('/daftar-mahasiswa', [AdminController::class, 'daftarMahasiswa'])->name('daftarMahasiswa');
Route::post('/send-mahasiswa', [AdminController::class, 'sendMahasiswa'])->name('sendMahasiswa');
Route::get('/daftar-dosen', [AdminController::class, 'daftarDosen'])->name('daftarDosen');
Route::post('/send-dosen', [AdminController::class, 'sendDosen'])->name('sendDosen');
Route::get('/daftar-kelas', [AdminController::class, 'daftarKelas'])->name('daftarKelas');
Route::post('/send-kelas', [AdminController::class, 'sendKelas'])->name('sendKelas');