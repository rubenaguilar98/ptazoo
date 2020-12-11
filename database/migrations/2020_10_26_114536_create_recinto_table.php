<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecintoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recinto', function (Blueprint $table) {
            $table->increments('idRec');
            $table->string('nombre', 255);
            $table->string('area', 20);
            $table->integer('comederos');
            $table->integer('bebederos');
            $table->string('vallado', 50);
            $table->unsignedInteger('idHab');
            
        });
    
        
        Schema::table('recinto' , function(Blueprint $table){
            $table->foreign('idHab')->references('idHab')
                ->on('habitat')
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
        Schema::dropIfExists('recinto');
    }
}
