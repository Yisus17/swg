<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadDisponibilidadTable extends Migration{

    public function up(){
        Schema::create('actividad_disponibilidad', function(Blueprint $table){
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('submarca_id')->unsigned();
            $table->boolean('hay_disponibilidad');
            $table->decimal('precio_botella',10,2)->nullable();
            $table->integer('numero_caras')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('submarca_id')->references('id')->on('submarca');
        });
    }


    public function down(){
        Schema::drop('actividad_competencia');
    }
}
