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
            $table->string('id_kota', 225);
            $table->string('id_jenis_studio', 225);
            $table->string('audiotori');
            $table->double('jumlah_kursi');
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
