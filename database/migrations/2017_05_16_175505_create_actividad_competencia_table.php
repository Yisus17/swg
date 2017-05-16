<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadCompetenciaTable extends Migration{

    public function up(){
        Schema::create('actividad_competencia', function(Blueprint $table){
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('submarca_id')->unsigned();
            $table->integer('competencia_marca_id')->unsigned();
            $table->decimal('precio_botella',10,2);
            $table->decimal('precio_copa',10,2)->nullable();
            $table->timestamps();
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('submarca_id')->references('id')->on('submarca');
            $table->foreign('competencia_marca_id')->references('id')->on('competencia_marca');
        });
    }


    public function down(){
        Schema::drop('actividad_competencia');
    }
}
