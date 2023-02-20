<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        DB::unprepared('
        CREATE TRIGGER delete_jadwal BEFORE DELETE ON `history_jadwal` FOR EACH ROW 
        BEGIN
        DECLARE DATA INT DEFAULT 0;
        SELECT COUNT(*) INTO DATA FROM history_jadwal WHERE id_jadwal = old.id_jadwal;
        
        IF DATA > 0 THEN
        
          INSERT INTO jadwal SET id_jadwal = old.id_jadwal,
        id_studio=old.id_studio,
        id_film=old.id_film,
        tgl_tayang_awal=old.tgl_tayang_awal,
        tgl_tayang_akhir=old.tgl_tayang_akhir;
        
    
    END IF;
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
        DB::unprepared('DROP TRIGGER `delete_jadwal`');
    }
}
