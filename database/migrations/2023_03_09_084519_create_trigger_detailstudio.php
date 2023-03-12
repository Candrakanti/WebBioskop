<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerDetailstudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_detailstudio AFTER UPDATE ON `detail_jenis_studio` FOR EACH ROW 
        BEGIN

        DECLARE detailstudio JSON;
        SET detailstudio = JSON_ARRAY(
        CONCAT("id_jenis_studio", old.id_jenis_studio),
        CONCAT("jenis_studio", old.jenis_studio),
        CONCAT("harga", old.harga)
        );

        INSERT INTO activity_log (description, properties , causer_id, event, created_at, updated_at) VALUES ("Data Jenis Studio sudah diubah", detailstudio, "3" , "update" ,NOW(), NOW());         
        

        
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
        Schema::dropIfExists('trigger_detailstudio');
    }
}
