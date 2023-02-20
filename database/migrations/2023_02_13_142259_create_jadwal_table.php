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
            $table->foreign('id_studio')->references('id_studio')->on('studio')->onDelete('cascade');       
            $table->string('id_film');
            $table->foreign('id_film')->references('id_film')->on('film')->onDelete('cascade');       
            $table->date('tgl_tayang_awal');
            $table->date('tgl_tayang_akhir');
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
