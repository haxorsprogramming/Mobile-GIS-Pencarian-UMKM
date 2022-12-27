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
        $username = $request -> username;
        $password = $request -> password;

        if($username == "admin" and $password == "admin"){
            $status = "success";
        }else{
            $status = "fail";
        }
        
        $dr = ['status' => $status];
        return \Response::json($dr);
    }
}
