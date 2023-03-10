<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerDetailjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_detailjam  AFTER UPDATE ON `detail_jam` FOR EACH ROW 
        BEGIN

        DECLARE jam JSON;
        SET jam = JSON_ARRAY(
        CONCAT("id_det_jam",old.id_det_jam),
        CONCAT("id_db",old.id_db),
        CONCAT("id_jadwal",old.id_jadwal),
        CONCAT("jam_tayang",old.jam_tayang)
        );

        INSERT INTO activity_log (description, properties, causer_id, created_at, updated_at) VALUES ("Jam sudah admin ubah", jam ,"3" ,NOW(), NOW());        
        
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
        Schema::dropIfExists('trigger_detailjam');
    }
}
