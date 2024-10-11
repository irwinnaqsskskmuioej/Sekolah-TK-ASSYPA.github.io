<?php

namespace App\Http\Controllers;
use App\Models\Mguru;
use App\Models\Msiswa;
use App\Models\Mnilai;
use Illuminate\Http\Request;

class Cdashboard extends Controller
{
    public function index()
    {
        $jumlahguru = Mguru::count();
        $jumlahsiswa = Msiswa::count();
        $jumlahnilai = Mnilai ::count();
        return view('dashboard.index', compact('jumlahguru', 'jumlahsiswa', 'jumlahnilai'));
    }
}
