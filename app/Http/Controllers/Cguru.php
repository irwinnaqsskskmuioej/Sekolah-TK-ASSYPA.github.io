<?php

namespace App\Http\Controllers;

use App\Models\Mguru;
use Illuminate\Http\Request;

class Cguru extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Mguru::get();
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mguru::create([
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'alamat'        => $request->alamat,
            'tgl_lahir'     => $request->tgl_lahir,
            'no_hp'         => $request->no_hp,
        ]);
    
        return redirect()->route('guru.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Mguru $mguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mguru $mguru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mguru $mguru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Mguru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index');
    }
}
