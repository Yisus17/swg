<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadFotoGondola extends Migration{

    public function up(){
         Schema::create('actividad_foto_gondola', function(Blueprint $table){
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('submarca_id')->unsigned();
            $table->string('url');
            $table->integer('categoria_foto_gondola_id')->unsigned();
            $table->timestamps();
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('submarca_id')->references('id')->on('submarca');
            $table->foreign('categoria_foto_gondola_id')->references('id')->on('categoria_foto_gondola');
        });
    }


    public function down(){
        Schema::drop('actividad_foto_gondola');
    }
}
