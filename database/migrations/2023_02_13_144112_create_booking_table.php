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
            $table->string('id_booking' ,255)->primary();
            $table->string('id_customer');
            $table->string('id_payment')->unique();
            $table->string('id_jadwal');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade'); 
            $table->date('tanggal_booking');
            $table->time('jam_booking');
            $table->string('tenggat_bayar');
            $table->string('kursi');
            $table->double('jumlah_kursi');
            $table->double('harga');
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
        Schema::dropIfExists('booking');
    }
}
