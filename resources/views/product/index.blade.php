@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="mb-4">
    <h1 class="text-3xl font-bold mb-4">Daftar Produk</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('product.create') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Produk
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full bg-white rounded shadow text-left">
        <thead class="bg-gray-100 text-gray-600">
            <tr>
                <th class="py-3 px-4 border-b">Nama</th>
                <th class="py-3 px-4 border-b">Harga</th>
                <th class="py-3 px-4 border-b">Kategori</th>
                <th class="py-3 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $product->name }}</td>
                    <td class="py-2 px-4">Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="py-2 px-4">{{ $product->category->name ?? '-' }}</td>
                    <td class="py-2 px-4 space-x-2">
                        <a href="{{ route('product.edit', $product->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-4 px-4 text-center text-gray-500">Belum ada produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection