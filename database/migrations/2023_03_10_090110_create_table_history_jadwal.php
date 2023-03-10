<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHistoryJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_history_jadwal', function (Blueprint $table) {
            $table->string('id_jadwal');
            $table->string('id_studio');
            $table->string('id_film');
            $table->string('tgl_tayang_awal');
            $table->string('tgl_tayang_akhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_history_jadwal');
    }
}
