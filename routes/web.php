<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // <-- Tambahkan baris ini

// Alamat untuk menampilkan halaman menu
Route::get('/menu-restoran', [AdminController::class, 'tampilkanHalamanMenu']);

