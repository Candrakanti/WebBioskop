<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateMovieFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE FUNCTION date_movie(tgl_tayang_awal DATE)
    RETURNS INT(11)
    BEGIN
    RETURN  DATEDIFF( tgl_tayang_awal, NOW());
    END;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_movie_function');
    }
}
