<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedureJumlah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::unprepared('     CREATE DEFINER=`root`@`localhost` PROCEDURE `buy`()
        // BEGIN
        // SELECT id_customer, COUNT(id_customer) AS jumlah FROM booking GROUP BY id_customer;
        //     END$$

        // DELIMITER ;


        DB::unprepared(' CREATE DEFINER=`root`@`localhost` PROCEDURE `buyy`() 
        /*ditambahin create definer root localhost (supaya ke panggil filenya)*/ 
        /*sama aja create procedure yang namanya buyy*/ 
        BEGIN
        SELECT users.`name` , booking.`id_customer` , users.`email`, users.`phone` , users.`created_at` , COUNT(id_customer) AS order_count
    FROM booking 
    INNER JOIN users ON booking.id_customer = users.`id`
    GROUP BY id_customer;  
        END /*SELECT tuh ambil id customer, COUNT tuh penghitungan gitu kalau di database(dia ngitung
        id customer itu AS jumlah (jadi dalam jumlah ngeCOUNT (ngitung udah berapa kali si id customer itu muncul di kolom jumlah (AS jumlah(nama kolom) )) */ 
       /*FROM booking (jadi booking ini harus tau si id customer ini muncul berapa kali di tabel booking)
       contoh seperti si user dengan id 2 beli tiket film ini tanggal sekian udah 3 kali, berati masuk ke kolom jumlah ini
       jadi pokoknya si id cutomer bakal di COUNT buat diitung dia tuh udah berapa kali di tabel booking*/ 
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP procedure IF EXISTS buyy');
    }
}
