<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\M_Umkm;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> createUmkm("Keripik Sanjai Uni Efi", "Evi Yuliana", "Keripik Pisang", "-6.173994159611038","106.7862738995646");
        $this -> createUmkm("Keripik Sambal Ila", "Fitri Handayani", "Keripik Sambal", "-6.172430045773679","106.78506765676708");
        $this -> createUmkm("Kue Rangin", "Azizah Annisa", "Kue Rangin", "-6.171270392386475","106.78597992528324");
        $this -> createUmkm("Kerupuk Ikan Rahmawati", "Raditya Dika", "Kerupuk Ikan", "-6.171521354954604","106.78692402344738");
        $this -> createUmkm("Keripik Tiga Rasa", "Amalia Ibdahni", "Kue Rangin", "-6.173045897188641","106.78654253204103");
    }

    function createUmkm($namaUsaha, $namaPemilik, $produk, $lat, $lng)
    {
        $umkm = new M_Umkm();
        $umkm -> kd_umkm = Str::uuid();
        $umkm -> nama_usaha = $namaUsaha;
        $umkm -> nama_pemilik = $namaPemilik;
        $umkm -> produk = $produk;
        $umkm -> lat = $lat;
        $umkm -> lng = $lng;
        $umkm -> save();
    }

}

// $table -> id();
// $table -> char('kd_umkm', 100);
// $table -> char('nama_usaha', 200);
// $table -> char('nama_pemilik', 200);
// $table -> char('alamat', 200) -> nullable();
// $table -> char('hp', 200) -> nullable();
// $table -> char('produk', 200) ;
// $table -> char('mulai_dibina', 10) -> nullable();
// $table -> char('nib', 100) -> nullable();
// $table -> char('p_irt', 1) -> nullable();
// $table -> char('sertifikat_halal', 1) -> nullable();
// $table -> char('lat', 50);
// $table -> char('lng', 50);
// $table -> timestamps();
