<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // Nama tabel yang dihubungkan ke model ini
    protected $table = 'gurus';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama', 
        'nip', 
        'alamat', 
        'telepon', 
        'email'
    ];

    // Jika ada relasi dengan model lain, bisa didefinisikan di sini
    public function mataPelajaran()
    {
        return $this->belongsToMany(MataPelajaran::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
