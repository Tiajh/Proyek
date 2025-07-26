<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Nama tabel di database
    protected $fillable = ['nama', 'nim', 'jurusan', 'angkatan'];

    // Relasi dengan model lain jika diperlukan
    // Contoh: public function kelas() { return $this->belongsTo(Kelas::class); }
}
