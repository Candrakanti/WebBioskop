<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAfpayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_payment  AFTER UPDATE ON `payment` FOR EACH ROW 
        BEGIN

      
            INSERT INTO activity_log (description, properties , causer_id, created_at, updated_at) VALUES ("Data Studio sudah diubah", studio_prop, "2" , NOW(), NOW());
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
        Schema::dropIfExists('trigger_afpayment');
    }
}
