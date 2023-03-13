<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerStudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_studio  AFTER UPDATE ON `studio` FOR EACH ROW 
        BEGIN

        DECLARE studio_prop JSON;
  	    SET studio_prop = JSON_ARRAY( 
        CONCAT("Id_studio", old.id_studio)   ,
        CONCAT("Id_jenis_studio ", old.Id_jenis_studio) ,
        CONCAT("audiotori",  old.audiotori) ,
        CONCAT("jumlah_row",  old.jumlah_row)   ,
        CONCAT("jumlah_kursi_perrow",  old.jumlah_kursi_perrow)  
    );
    
        INSERT INTO activity_log (description, properties , causer_id, created_at, event, updated_at) VALUES ("Data Studio sudah diubah", studio_prop, "3" , "update", NOW(), NOW());         
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
        Schema::dropIfExists('trigger_studio');
    }
}
