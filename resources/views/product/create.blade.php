@extends('Layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<h1 class="text-3xl font-bold mb-6">Tambah Produk</h1>

<form action="{{ route('product.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
    @csrf

    <div>
        <label for="name" class="block font-semibold mb-1">Nama Produk</label>
        <input type="text" name="name" id="name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}" required>
        @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="price" class="block font-semibold mb-1">Harga</label>
        <input type="number" name="price" id="price" class="w-full border px-3 py-2 rounded" value="{{ old('price') }}" required>
        @error('price')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="category_id" class="block font-semibold mb-1">Kategori</label>
        <select name="category_id" id="category_id" class="w-full border px-3 py-2 rounded" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex justify-end">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </div>
</form>
@endsection