<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedureJumlah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::unprepared('     CREATE DEFINER=`root`@`localhost` PROCEDURE `buy`()
        // BEGIN
        // SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;
        //     END$$

        // DELIMITER ;

        DB::unprepared(' CREATE DEFINER=`root`@`localhost` PROCEDURE `buyy`()
        BEGIN
        SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;       
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
        DB::unprepared('DROP procedure IF EXISTS buyy');
    }
}
