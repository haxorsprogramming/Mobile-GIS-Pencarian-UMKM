<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class C_Main_App extends Controller
{
    public function AdminHome()
    {
        $currentTime = Carbon::now();
        $dr = ['waktu' => $currentTime];
        return view('admin.adminHome', $dr);
    }
}
