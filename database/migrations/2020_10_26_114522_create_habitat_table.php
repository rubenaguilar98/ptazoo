<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitat', function (Blueprint $table) {
            $table->increments('idHab');
            $table->string('nombre', 50);
            $table->string('continente', 20);
            $table->string('temperatura', 10);
            $table->string('vegetacion', 255);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitat');
    }
}
