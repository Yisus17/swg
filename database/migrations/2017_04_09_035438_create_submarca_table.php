<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmarcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submarca', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marca')->onDelete('cascade');
            $table->string('descripcion_submarca')->nullable();
            $table->string('codigo')->nullable();
            $table->string('codigo_barra')->nullable();
            $table->decimal('precio',10,2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('submarca');
    }
}
