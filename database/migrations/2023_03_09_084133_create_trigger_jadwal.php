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
        INSERT INTO activity_log (description, created_at, updated_at) VALUES ("Data jadwal sudah diubah", NOW(), NOW());
        

        
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
