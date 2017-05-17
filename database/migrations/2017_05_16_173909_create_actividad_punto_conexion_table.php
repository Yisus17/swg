<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadPuntoConexionTable extends Migration{

    public function up(){
         Schema::create('actividad_punto_conexion', function(Blueprint $table){
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('submarca_id')->unsigned();
            $table->integer('punto_conexion_id')->unsigned();
            $table->boolean('lleva_marca');
            $table->timestamps();
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('submarca_id')->references('id')->on('submarca');
            $table->foreign('punto_conexion_id')->references('id')->on('punto_conexion');
        });
    }


    public function down(){
        Schema::drop('actividad_punto_conexion');
    }
}
