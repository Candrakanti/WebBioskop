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
        Schema::create('_detail_jam', function (Blueprint $table) {
            $table->string('id_jadwal');
            $table->foreign('id_jadwal')->references('id_db')->on('_detail_bioskop')->onDelete('cascade');
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
        Schema::dropIfExists('_detail_jam');
    }
}
