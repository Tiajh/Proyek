@extends('Layouts.app')

@section('content')
    <div class="container">
        <h1>Gallery</h1>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <!-- Gambar lokal dari public/images -->
            <img src="{{ asset('asset/image/kucing.jpg') }}" alt="Gambar Lokal" style="width:100px;">
            <img src="{{ asset('asset/image/kucing2.jpeg') }}" alt="Gambar Lokal" style="width:100px;">
            <img src="{{ asset('asset/image/kucing3.jpeg') }}" alt="Gambar Lokal" style="width:100px;">
        </div>
    </div>
@endsection
