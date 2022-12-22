<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Sandbox;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# homepage 
Route::get('/', [C_Home::class, 'Homepage']);

# login proses 
Route::get('/login', [C_Auth::class, 'LoginPage']);

# testing 
Route::get('/cek-lokasi', [C_Sandbox::class, 'CekLokasi']);