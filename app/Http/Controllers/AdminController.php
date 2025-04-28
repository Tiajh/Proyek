<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Misal nanti mau disimpan ke database, tinggal buat model dan insert di sini.
        // Untuk sekarang, kita kembalikan success message saja

        return redirect()->back()->with('success', 'Admin berhasil ditambahkan!');
    }
}
