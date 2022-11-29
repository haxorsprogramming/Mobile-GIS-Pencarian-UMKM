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
        Schema::create('tbl_history_akurasi', function (Blueprint $table) {
            $table -> id();
            $table -> char('token_history', 100);
            $table -> char('kd_pengujian', 100);
            $table -> char('kd_umkm', 200);
            $table -> char('lat_umkm', 200);
            $table -> char('lng_umkm', 200);
            $table -> char('jarak_ke_sumber', 100);
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
        Schema::dropIfExists('tbl_history_akurasi');
    }
};
