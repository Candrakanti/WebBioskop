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
/*bikin function namanya date_movie, tanggal tayang awal tuh yang di atur tanggal tayang
awalnya di jadwal. DATE (tipe data dari si tanggal awalnya)
RETURN (tipe data pengembaliannya apa, ngembaliin data apa: data integer jadi dia
ngembaliin data bilangan. DATE IFF seperti rentang tanggal (jadi dia tuh ngebandingin data
tanggal tayang awal, lalu ntar dikurang sama data tanggal hari ini. contoh tayang awalnya tuh besok
terus sekarang jadi satu hari lagi akan tayang)) */
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
