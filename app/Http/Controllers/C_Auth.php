<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Auth extends Controller
{
    public function LoginPage()
    {
        return view('auth.loginPage');
    }
    public function LoginProses(Request $request)
    {
        $status = "";
        
        $dr = ['status' => $status];
        return \Response::json($dr);
    }
}
