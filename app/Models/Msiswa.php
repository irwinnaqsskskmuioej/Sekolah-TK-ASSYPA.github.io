<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msiswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
		protected $fillable = ['id', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'kelas'];
}
