<?php

namespace App\Http\Controllers;

use App\Models\Msiswa;
use App\Models\Mguru;
use App\Models\Mnilai; 
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store(Request $request)
    {
        Msiswa::create([
            'id'            => $request->id,
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat'        => $request->alamat,
            'kelas'         => $request->kelas
        ]);

        return redirect()->route('siswa.index');
    }

    public function storeGuru(Request $request)
    {
        Mguru::create([
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'alamat'        => $request->alamat,
            'tgl_lahir'     => $request->tgl_lahir,
            'no_hp'         => $request->no_hp
        ]);

        return redirect()->route('guru.index');
    }

    public function storenilai(Request $request)
    {
        Mnilai::create([
            'id_siswa'            => $request->id_siswa,
            'm_peljaran'          => $request->m_peljaran,
            'nilai'         => $request->nilai,
            'kelas'        => $request->kelas,
            't_pelajaran'     => $request->t_pelajaran,
            'keterangan'         => $request->keterangan,
        ]);

        return redirect()->route('nilai.index');
    }
}
