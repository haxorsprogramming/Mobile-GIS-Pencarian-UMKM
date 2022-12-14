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
        Schema::create('tbl_proses_pengujian', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_pengujian', 100);
            $table -> char('nama_penguji', 200);
            $table -> char('lat_lokasi', 200);
            $table -> char('lng_lokasi', 200);
            $table -> char('jarak_ke_umkm', 100);
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
        Schema::dropIfExists('tbl_proses_pengujian');
    }
};
