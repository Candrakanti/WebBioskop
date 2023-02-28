<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailJamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_jam', function (Blueprint $table) {
            $table->string('id_det_jam');
            $table->string('id_db');
            $table->foreign('id_db')->references('id_db')->on('detail_bioskop')->onDelete('cascade');
            $table->string('id_jadwal');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('detail_bioskop')->onDelete('cascade');
            $table->time('jam_tayang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_jam');
    }
}
