<?php

namespace App\Http\Controllers;

use App\Models\User; // <-- Pastikan model User sudah di-import
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan SEMUA pengguna
    public function index()
    {
        $users = User::all(); // Ambil semua data dari tabel users
        return view('admin.users.index', ['users' => $users]);
    }

    // Fungsi untuk menampilkan SATU pengguna di form edit
    public function edit(User $user)
    {
        // Laravel akan otomatis mencari user berdasarkan ID di URL
        return view('admin.users.edit', ['user' => $user]);
    }

    // Fungsi untuk MENYIMPAN perubahan (belum kita buat view-nya, tapi siapkan dulu)
    public function update(Request $request, User $user)
    {
        // Logika untuk validasi dan update role
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Role pengguna berhasil diupdate.');
    }
}