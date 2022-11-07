<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->string('id_film', 225)->primary();
            $table->string('judul_film');
            $table->string('jenis_film');
            $table->string('producer', 50);
            $table->string('sutradara', 50);
            $table->string('penulis', 50);
            $table->text('cast');
            $table->text('sinopsis');
            $table->string('link_trailer');
            $table->string('image');
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
        Schema::dropIfExists('film');
    }
}
