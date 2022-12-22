<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\M_Umkm;
use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function Homepage()
    {
        $currentTime = Carbon::now();
        $dr = ['waktu' => $currentTime];
        return view('home.homePage', $dr);
    }
    public function Beranda()
    {
        $dataUmkm = M_Umkm::all();
        $dr = ['dataUmkm' => $dataUmkm];
        return view('home.berandaPage', $dr);
    }
}
