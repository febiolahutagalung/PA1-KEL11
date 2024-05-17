<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasitampilanController extends Controller
{
    public function index()
    {
        $JumlahDonasi = Donasi::sum('jumlahdonasi');
        $allDonasi = Donasi::all();
        return view('tampilan.donasi', compact('allDonasi', 'JumlahDonasi'));
    }
}
