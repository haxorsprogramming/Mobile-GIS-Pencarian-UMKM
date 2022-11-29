<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Sandbox extends Controller
{
    public function CekLokasi()
    {
        return view('sandbox.cekLokasi');
    }
}
