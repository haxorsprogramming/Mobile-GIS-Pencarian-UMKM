<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Umkm extends Model
{
    protected $table = "tbl_umkm";
    protected $fillable = [
        'kd_umkm',
        'nama_usaha',
        'nama_pemilik',
        'alamat',
        'hp',
        'produk',
        'mulai_dibina',
        'nib',
        'p_irt',
        'sertifikat_halal',
        'lat',
        'lng',
    ];
}

// $table -> id();
//             $table -> char('kd_umkm', 100);
//             $table -> char('nama_usaha', 200);
//             $table -> char('nama_pemilik', 200);
//             $table -> char('alamat', 200) -> nullable();
//             $table -> char('hp', 200) -> nullable();
//             $table -> char('produk', 200) ;
//             $table -> char('mulai_dibina', 10) -> nullable();
//             $table -> char('nib', 100) -> nullable();
//             $table -> char('p_irt', 1) -> nullable();
//             $table -> char('sertifikat_halal', 1) -> nullable();
//             $table -> char('lat', 50);
//             $table -> char('lng', 50);
//             $table -> timestamps();