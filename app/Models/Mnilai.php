<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mnilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';
    protected $fillable = ['id_siswa', 'm_peljaran', 'nilai', 'kelas', 't_pelajaran', 'keterangan'];
}

