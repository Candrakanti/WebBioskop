<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerBioskop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_bioskop  AFTER UPDATE ON `bioskop` FOR EACH ROW 
        BEGIN

        DECLARE bioskop JSON;
        SET bioskop = JSON_ARRAY(
        CONCAT("id_bioskop",old.id_bioskop),
        CONCAT("nama_bioskop",old.nama_bioskop),
        CONCAT("alamat",old.alamat)
        );

        INSERT INTO activity_log (description, properties, causer_id, created_at, updated_at) VALUES ("Data Bioskop sudah admin ubah", bioskop ,"3" ,NOW(), NOW());        
        
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
        Schema::dropIfExists('trigger_bioskop');
    }
}
