<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// student
Route::get('/', [StudentController::class, 'main'])->name('mainStudent');