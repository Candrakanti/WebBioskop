<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerFilm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER after_update_film  AFTER UPDATE ON `film` FOR EACH ROW 
        BEGIN

        DECLARE film JSON;
        SET film = JSON_ARRAY(
        CONCAT("id_film", old.id_film),
        CONCAT("judul_film", old.judul_film),
        CONCAT("jenis_film", old.jenis_film),
        CONCAT("producer", old.producer),
        CONCAT("sutradara", old.sutradara),
        CONCAT("penulis", old.penulis),
        CONCAT("cast", old.cast),
        CONCAT("sinopsis", old.sinopsis),
        CONCAT("link_trailer", old.link_trailer),
        CONCAT("image", old.image)
        );

        INSERT INTO activity_log (description, properties , causer_id, created_at, updated_at) VALUES ("Data Film sudah diubah", film, "3" , NOW(), NOW());         
        

        
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
        Schema::dropIfExists('trigger_film');
    }
}
