<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerJadwalTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(' 
        CREATE TRIGGER carbon_jadwal BEFORE DELETE ON `jadwal` FOR EACH ROW 
        BEGIN 
        DECLARE DATA INT DEFAULT 0;
        SELECT COUNT(*) INTO DATA FROM jadwal WHERE id_jadwal = old.id_jadwal;
        
        IF DATA > 0 THEN
        
          INSERT INTO history_jadwal SET id_jadwal = old.id_jadwal,
        id_studio=old.id_studio,
        id_film=old.id_film,
        tgl_tayang_awal=old.tgl_tayang_awal,
        tgl_tayang_akhir=old.tgl_tayang_akhir;
        
    
    END IF;
            END
        ');
    }

    /* create trigger (buat trigger dengan name carbon_jadwal ini sebelum dihapus dari ...
    kalau misalnya film udah habis waktu tanggalnya di jadwal, bakal masuk ke histori 
    dan ga akan ke hapus filmnya, jadi ada backupan.
    contoh kita sudah mensetting sampe tanggal 5 januari dan sekarang sudah 7 januari, film itu akan
    masuk ke histori dan filmnya tidak akan ke hapus */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `carbon_jadwal`');
     
    }
}
