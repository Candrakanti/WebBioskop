<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBioskopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_detail_bioskop', function (Blueprint $table) {
          
            $table->string('id_db', 255)->primary();
            $table->string('id_bioskop');
            $table->foreign('id_bioskop')->references('id_bioskop')->on('bioskop')->onDelete('cascade');
            $table->string('id_jadwal');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
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
        Schema::dropIfExists('_detail_bioskop');
    }
}
