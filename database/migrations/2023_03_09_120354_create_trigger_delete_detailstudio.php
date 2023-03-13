<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerDeleteDetailstudio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER af_delete_detailstudio  AFTER DELETE ON `detail_jenis_studio` FOR EACH ROW 
        BEGIN
        INSERT INTO activity_log (description, causer_id ,event, created_at, updated_at) VALUES ("Delete data detail studio", "3","delete", NOW(), NOW());
        

        
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
        Schema::dropIfExists('trigger_delete_detailstudio');
    }
}
