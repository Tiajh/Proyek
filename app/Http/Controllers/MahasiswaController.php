<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
         return response()->json($mahasiswa);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama' => 'required|string',
        'nim' => 'required|string|unique:mahasiswa,nim',
        'jurusan' => 'required|string',
        'angkatan' => 'required|integer'
        ]);

        $mahasiswa = Mahasiswa::create($validated);
        return response()->json($mahasiswa, 201);
    }/**
     * Show the form for creating a new resource.
     */
    public function show($id)
    {
        return Mahasiswa::findOrFail($id); // Menampilkan data mahasiswa berdasarkan ID
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all()); // Update data mahasiswa
        return $mahasiswa; // Mengembalikan data mahasiswa yang telah diperbarui
    }   
    /**
     * Store a newly created resource in storage.
     */
    public function destroy($id)
    {
        Mahasiswa::destroy($id); // Menghapus data mahasiswa berdasarkan ID
        return response()->json(null, 204);
    }
}
