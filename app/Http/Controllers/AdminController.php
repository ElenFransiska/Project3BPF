<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Fungsi yang kita panggil dari Route
    public function tampilkanHalamanMenu()
    {
        // Perintah untuk menampilkan file view yang sudah kita buat
        return view('halaman_menu');
    }
}