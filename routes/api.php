<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;

Route::apiResource('mahasiswa', MahasiswaController::class);
Route::apiResource('buku', BukuController::class);