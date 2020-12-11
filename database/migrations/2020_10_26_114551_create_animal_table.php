<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('idAni');
            $table->string('nombre', 50);
            $table->decimal('peso', 8,2);
            $table->decimal('altura' , 8,2);
            $table->string('tipo', 50);
            $table->string('especie', 50);
            $table->string('imagen', 50);
            $table->string('enfermedad', 50);
            $table->string('dieta', 50);
            $table->date('fech_nac');
            $table->unsignedInteger('idRec');
        });

        Schema::table('animal' , function(Blueprint $table){
            $table->foreign('idRec')->references('idRec')
                ->on('recinto')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal');
    }
}
