<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_jadwal  AFTER UPDATE ON `jadwal` FOR EACH ROW 
        BEGIN

        DECLARE jadwal JSON;
        SET jadwal = JSON_ARRAY(
        CONCAT("id_jadwal", old.id_jadwal),
        CONCAT("id_studio", old.id_studio),
        CONCAT("id_film", old.id_film),
        CONCAT("tgl_tayang_awal", old.tgl_tayang_awal),
        CONCAT("tgl_tayang_akhir", old.tgl_tayang_akhir)
        );
        
        INSERT INTO activity_log (description, properties , causer_id, event, created_at, updated_at) VALUES ("Data Jadwal sudah diubah", jadwal, "3" ,"update", NOW(), NOW());         
        
        
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
        Schema::dropIfExists('trigger_jadwal');
    }
}
