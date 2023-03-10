<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfdeleteFilm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER af_delete_film  AFTER DELETE ON `film` FOR EACH ROW 
        BEGIN
        INSERT INTO activity_log (description, event, created_at, updated_at) VALUES ("Delete data film", "delete", NOW(), NOW());
        
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
        Schema::dropIfExists('afdelete_film');
    }
}
