<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studio', function (Blueprint $table) {
            $table->string('id_studio', 225)->primary();
            $table->string('id_jenis_studio');
            $table->foreign('id_jenis_studio')->references('id_jenis_studio')->on('detail_jenis_studio')->onDelete('cascade'); 
            $table->string('audiotori');
            $table->char('jumlah_row');
            $table->double('jumlah_kursi_perrow');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studio');
    }
}
