<?php

namespace App\Http\Controllers;

use App\Models\Mjadwal;
use Illuminate\Http\Request;

class Cjadwal extends Controller
{
    public function index()
    {
        $jadwal = Mjadwal::get();
        return view('jadwal.index', compact('jadwal'));
    }

    public function tambah()
    {
        return view('jadwal.tambah');
    }

    public function simpan(Request $request)
    {
        Mjadwal::create([
            'hari'      => $request->hari,
            'jam_mulai'      => $request->jam_mulai,
            'jam_selesai'            => $request->jam_selesai,
            'kelas'         => $request->kelas,
            'pelajaran'     => $request->pelajaran,
            'guru'     => $request->guru,
        ]);
        return redirect()->route('jadwal.index');
    }

    public function hapus(string $id)
    {
        $jadwal = Mjadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.index');
    }

}
