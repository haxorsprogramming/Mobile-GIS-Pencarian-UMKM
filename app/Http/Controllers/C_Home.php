<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function Homepage()
    {
        return view('home.homePage');
    }
}
