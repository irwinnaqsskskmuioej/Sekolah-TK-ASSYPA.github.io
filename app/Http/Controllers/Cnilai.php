<?php

namespace App\Http\Controllers;

use App\Models\Mnilai;
use Illuminate\Http\Request;

class Cnilai extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = Mnilai::get();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nilai.tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     */
    public function show(Mnilai $mnilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mnilai $mnilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mnilai $mnilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilai = Mnilai::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index');
    }
}
