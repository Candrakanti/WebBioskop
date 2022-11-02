<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->string('id_booking', 225)->primary();
            $table->string('id_customer', 225);
            $table->string('id_payment');
            $table->string('id_jadwal');
            $table->date('tanggal_booking');
            $table->double('jumlah_kursi');
            $table->double('total_harga');
            $table->string('qr_tiket');
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
        Schema::dropIfExists('booking');
    }
}
