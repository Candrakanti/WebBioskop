<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::unprepared('CREATE
        /*[ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
        [DEFINER = { user | CURRENT_USER }]
        [SQL SECURITY { DEFINER | INVOKER }]*/
        VIEW `bioskop`.`viewStudio` /*create bioskop(namaDatabase), viewStudio(namaViewnya)*/
        AS
    (
    SELECT  /*ini tabel studio, select(nyari)*/
      studio.`id_studio`, /*nyari id_studio di tabel studio*/
      j.id_jenis_studio AS id_jenis_studio, //*nyari jenis id_studio di tabel studio*/
      studio.`audiotori`, /*nyari audiotori di tabel studio*/
      studio.`jumlah_row`, /*nyari jumlah row di tabel studio*/
      studio.`jumlah_kursi_perrow` /*nyari jumlah kursi perrow di tabel studio*/
      
    FROM  /*yang diatas tuh disimpen FROM di studio*/
        studio
        JOIN detail_jenis_studio AS j ON studio.id_jenis_studio = j.id_jenis_studio
    );    /*JOIN dengan detail jenis studio (jadi from studio dijoinin dengan tabel detail jenis studio */ 
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS viewStudio');
        
    }

}
