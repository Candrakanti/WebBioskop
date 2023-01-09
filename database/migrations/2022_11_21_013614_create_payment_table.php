<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->string('id_payment');
            $table->foreign('id_payment')->references('id_payment')->on('booking')->onUpdate('cascade')->onDelete('cascade');
            $table->string('id_booking');
            $table->foreign('id_booking')->references('id_booking')->on('booking')->onUpdate('cascade')->onDelete('cascade');       
            $table->string('id_bank', 225);
            $table->double('harga');
            $table->char('status_bayar')->default('0');
            $table->string('bukti_bayar', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     
        Schema::dropIfExists('payment');
        
    }
}
