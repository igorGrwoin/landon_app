<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD:landon_app/database/migrations/2017_06_19_215505_create_rooms_table.php
            $table->string('name');
            $table->integer('floor');
            $table->text('description');
=======
>>>>>>> f0967900bf872d073fb577655af2ea0b48c1af2c:landon_app/database/migrations/2017_06_19_215505_create_rooms_table.php
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
        Schema::dropIfExists('rooms');
    }
}
