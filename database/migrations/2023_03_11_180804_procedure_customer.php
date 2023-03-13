<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedureCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE DEFINER=`root`@`localhost` PROCEDURE `CustomerPaid`()
        BEGIN
        INSERT INTO activity_log (description ,event, created_at, updated_at) VALUES ("Delete data jadwal ", "delete", NOW(), NOW());        
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP procedure IF EXISTS CustomerPaid');
    }
}
