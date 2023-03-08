<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE FUNCTION sell(id_jadwals varchar(100))
        RETURNS INT(11)
        BEGIN
        DECLARE sell_items INT;
	SELECT COUNT(id_jadwal) AS jdwl INTO sell_items FROM booking WHERE id_jadwal = id_jadwals;
		RETURN sell_items;
        END;');
        
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell_function');
    }
}
