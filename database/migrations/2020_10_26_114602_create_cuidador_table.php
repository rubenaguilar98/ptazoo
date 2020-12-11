<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidador', function (Blueprint $table) {
            $table->increments('idCui');
            $table->string('nombre', 255);
            $table->string('especialidad', 50);
            $table->date('fech_nac');
            $table->string('email', 255);
            $table->string('imagen', 255);
            $table->integer('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuidador');
    }
}
