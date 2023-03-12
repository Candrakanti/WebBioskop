<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedureBioskop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE DEFINER=`root`@`localhost` PROCEDURE `bioskop`.`insert_bioskop`(id VARCHAR(225), bioskop VARCHAR(255), alamatt VARCHAR(255))
	    BEGIN
	       INSERT INTO bioskop (id_bioskop, nama_bioskop, alamat) VALUES (id, bioskop, alamatt);
	    END
    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP procedure IF EXISTS insert_bioskop');
    }
}
