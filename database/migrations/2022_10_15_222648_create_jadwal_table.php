<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('id_jadwal', 225)->primary();
            $table->string('id_studio');
            $table->string('id_film');
            $table->string('id_kota');
            $table->string('id_bioskop');
            $table->date('tgl_tayang_awal');
            $table->date('tgl_tayang_akhir');
            $table->json('jam_tayang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
