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

        DECLARE payment JSON;
        SET payment = JSON_ARRAY( 
        CONCAT("id_payment", old.id_payment)   ,
        CONCAT("id_booking", old.id_booking) ,
        CONCAT("harga",  old.harga) ,
        CONCAT("payment_type",  old.payment_type)   ,
        CONCAT("status_bayar ",  old.status_bayar)  
        );

            INSERT INTO activity_log (description, properties , causer_id, created_at, updated_at) VALUES ("Data Payment sudah diubah", payment, "2" , NOW(), NOW());       
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
