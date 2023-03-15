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

        DB::unprepared(' CREATE DEFINER=`root`@`localhost` PROCEDURE `buyy`() 
        BEGIN
        SELECT users.`name` , booking.`id_customer` , users.`email`, users.`phone` , users.`created_at` , 
        COUNT(id_customer) AS order_count
        FROM booking 
        INNER JOIN users ON booking.id_customer = users.`id`
        GROUP BY id_customer;  
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
