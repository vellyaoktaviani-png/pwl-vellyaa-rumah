<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Tambahkan baris ini supaya data bisa diisi lewat Controller
    protected $fillable = [
        'nama_dosen',
        'NIDN',
        'email',
        'keahlian',
    ];
}
