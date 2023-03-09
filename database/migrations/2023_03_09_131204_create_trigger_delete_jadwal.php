<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerDeleteJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER af_delete_jadwal  AFTER DELETE ON `jadwal` FOR EACH ROW 
        BEGIN
        INSERT INTO activity_log (description, created_at, updated_at) VALUES ("Delete data jadwal ", NOW(), NOW());
        

        
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
        Schema::dropIfExists('trigger_delete_jadwal');
    }
}
