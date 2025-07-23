<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000, 'jenis'=> 'Pakaian', 'merek' => 'inkalum', 'material' => 'kain'],
        2 => ['name' => 'Stiker Koding', 'price' => 25000, 'jenis'=> 'Pakaian', 'merek' => 'inkalum', 'material' => 'stiker'],
        3 => ['name' => 'Notebook Dev', 'price' => 50000, 'jenis'=> 'Pakaian', 'merek' => 'inkalum', 'material' => 'kertas'],
    ];

    // Menampilkan daftar produk
    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }

    // Menampilkan detail produk
    public function show($id)
    {
        if (!array_key_exists($id, $this->products)) {
            abort(404);
        }

        $product = $this->products[$id];
        return view('products.show', compact('product'));
    }
}
