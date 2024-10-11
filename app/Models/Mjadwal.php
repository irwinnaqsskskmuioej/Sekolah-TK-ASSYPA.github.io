<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mjadwal extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = ['hari', 'jam_mulai', 'jam_selesai', 'kelas', 'pelajaran','guru'];
}
