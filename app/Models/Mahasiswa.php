<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'table_mahasiswa';

    protected $fillable = ['Fullname', 'NIM', 'Tempat_Lahir', 'Tanggal_Lahir', 'Alamat'];
}
