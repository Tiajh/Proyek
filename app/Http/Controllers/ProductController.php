<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. Tampilkan semua produk
    public function index()
    {
        $products = Product::with("category")->get(); // load relasi kategori
        return view('product.index', compact('products'));
    }

    // 2. Tampilkan form tambah produk
    public function create()
    {
        $categories = Category::all(); // untuk dropdown kategori
        return view('product.create', compact('categories'));
    }

    // 3. Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // 4. Tampilkan form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    // 5. Update produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // 6. Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus.');
    }
}