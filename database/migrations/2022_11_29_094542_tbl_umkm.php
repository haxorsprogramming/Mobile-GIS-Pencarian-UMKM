<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_umkm', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_umkm', 100);
            $table -> char('nama_usaha', 200);
            $table -> char('nama_pemilik', 200);
            $table -> char('alamat', 200);
            $table -> char('hp', 200);
            $table -> char('produk', 200);
            $table -> char('mulai_dibina', 10);
            $table -> char('nib', 100);
            $table -> char('p_irt', 1);
            $table -> char('sertifikat_halal', 1);
            $table -> char('lat', 50);
            $table -> char('lng', 50);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_umkm');
    }
};
