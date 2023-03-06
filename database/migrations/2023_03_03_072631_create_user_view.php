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
       // MASIH SALAH <3 
        DB::unprepared('CREATE
        /*[ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
        [DEFINER = { user | CURRENT_USER }]
        [SQL SECURITY { DEFINER | INVOKER }]*/
        VIEW `bioskop`.`viewStudio` 
        AS
    (
    SELECT 
      studio.`id_studio`, 
      j.id_jenis_studio AS id_jenis_studio,
      studio.`audiotori`, 
      studio.`jumlah_row`, 
      studio.`jumlah_kursi_perrow`
      
    FROM  
        studio
        JOIN detail_jenis_studio AS j ON studio.id_jenis_studio = j.id_jenis_studio
    );    
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
