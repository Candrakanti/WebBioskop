<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JumlahBeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::unprepared('CREATE PROCEDURE create_store_procedure
        // BEGIN
        //     SELECT COUNT(id_customer) AS jumlah FROM `booking` GROUP BY id_customer;
        // END
        // ');

        // $procedure = "DROP PROCEDURE IF EXISTS `jumlah`;
        //     CREATE PROCEDURE `jumlah` (IN id_customer int)
        //     BEGIN
        //     SELECT COUNT(id_customer) AS jumlah FROM `booking` GROUP BY id_customer;
        //     END;";
  
        // \DB::unprepared($procedure);

        DB::unprepared('CREATE PROCEDURE jumlah_beli (IN jumlahh VARCHAR (100))
        BEGIN
            SELECT COUNT(id_customer) FROM `booking` WHERE `id_customer` = jumlahh;        
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
        DB::unprepared('DROP procedure IF EXISTS jumlah_beli');
    }
}