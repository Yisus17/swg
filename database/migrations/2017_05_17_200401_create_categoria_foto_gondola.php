<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaFotoGondola extends Migration{

    public function up(){
        Schema::create('categoria_foto_gondola', function(Blueprint $table){
            $table->increments('id');
            $table->string('descripcion');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::drop('categoria_foto_gondola');
    }
}
