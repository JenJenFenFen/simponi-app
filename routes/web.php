<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'main']);
    Route::get('/daftar-mahasiswa', [AdminController::class, 'daftarMahasiswa']);
    Route::get('/daftar-dosen', [AdminController::class, 'daftarDosen']);
});


// Route::get('/', function () {
//     return view('sidebars');
// });

// Route::get('/admin/daftar-mahasiswa', function () {
//     return view('admin.daftar_mahasiswa');
// });
