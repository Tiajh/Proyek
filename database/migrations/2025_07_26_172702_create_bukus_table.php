<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {   
    Schema::create('bukus', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('pengarang');
        $table->string('penerbit');
        $table->year('tahun_terbit');
        $table->enum('kategori', ['Fiksi', 'Non-Fiksi', 'Referensi']);
        $table->timestamps();
    });
}};