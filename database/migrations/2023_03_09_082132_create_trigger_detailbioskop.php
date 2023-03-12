<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerDetailbioskop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_detailbioskop  AFTER UPDATE ON `detail_bioskop` FOR EACH ROW 
        BEGIN

        DECLARE detailbioskop JSON;
        SET detailbioskop = JSON_ARRAY(
        CONCAT("id_db", old.id_db),
        CONCAT("id_bioskop", old.id_bioskop),
        CONCAT("id_jadwal", old.id_jadwal)
        );

        INSERT INTO activity_log (description, properties, causer_id, event ,created_at, updated_at) VALUES ("Data Detail Bioskop Sudah Admin Ubah", detailbioskop, "3", "update" ,NOW(), NOW());        
        
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
        Schema::dropIfExists('trigger_detailbioskop');
    }
}
