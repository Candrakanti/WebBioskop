<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingLaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_later', function (Blueprint $table) {
            $table->increments('id_booking' ,255);
            $table->string('id_customer');
            $table->string('id_payment');
            $table->string('id_jadwal');
            $table->date('tanggal_booking');
            $table->string('kursi');
            $table->double('jumlah_kursi');
            $table->double('total_harga');
            $table->string('qr_tiket')->default('0');
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
        Schema::dropIfExists('booking_later');
    }
}
