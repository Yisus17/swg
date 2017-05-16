<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadMaterialPopTable extends Migration{

    public function up(){
        Schema::create('actividad_material_pop', function(Blueprint $table){
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('submarca_id')->unsigned();
            $table->integer('materialpop_id')->unsigned();
            $table->timestamps();
            $table->foreign('actividad_id')->references('id')->on('actividad');
            $table->foreign('submarca_id')->references('id')->on('submarca');
            $table->foreign('materialpop_id')->references('id')->on('materialpop');
        });
    }


    public function down(){
        Schema::drop('actividad_material_pop');
    }
}
