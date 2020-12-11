<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecintoCuidadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidador_recinto', function (Blueprint $table) {
            $table->increments('idReCui');
            $table->unsignedInteger('idRec');
            $table->unsignedInteger('idCui');
        });

        Schema::table('cuidador_recinto' , function(Blueprint $table){
            $table->foreign('idRec')->references('idRec')
                ->on('recinto')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });

        Schema::table('cuidador_recinto' , function(Blueprint $table){
            $table->foreign('idCui')->references('idCui')
                ->on('cuidador')
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
        Schema::dropIfExists('cuidador_recinto');
    }
}
