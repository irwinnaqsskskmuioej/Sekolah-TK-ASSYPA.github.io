<?php

namespace App\Http\Controllers;

use App\Models\Msiswa;
use Illuminate\Http\Request;

class Csiswa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Msiswa::get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     */
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
    


    /**
     * Display the specified resource.
     */
    public function show(Msiswa $msiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Msiswa $msiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Msiswa $msiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Msiswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
