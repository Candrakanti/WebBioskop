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
        DB::unprepared('ALTER ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwJenis` AS (
            SELECT
              `detail_jenis_studio`.`jenis_studio` AS `jenis_studio`,
              `detail_jenis_studio`.`harga`        AS `harga`,
              `studio`.`id_jenis_studio`           AS `id_jenis_studio`
            FROM (`detail_jenis_studio`
               JOIN `studio`
                 ON (`detail_jenis_studio`.`id_jenis_studio` = `studio`.`id_jenis_studio`)

        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP VIEW IF EXISTS vwJenis');
        
    }

}
