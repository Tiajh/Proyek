<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return response()->json(Buku::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|max:' . date('Y'),
            'kategori' => 'required|in:Fiksi,Non-Fiksi,Referensi',
        ]);

        $buku = Buku::create($validated);
        return response()->json($buku, 201);
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return response()->json($buku);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'pengarang' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|max:' . date('Y'),
            'kategori' => 'required|in:Fiksi,Non-Fiksi,Referensi',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($validated);
        return response()->json($buku);
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return response()->json(null, 204);
    }
}
