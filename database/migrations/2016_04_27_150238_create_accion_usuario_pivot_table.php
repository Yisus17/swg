<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionUsuarioPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accion_usuario', function (Blueprint $table) {

            $table->integer('accion_id')->unsigned()->index();
            $table->foreign('accion_id')->references('id')->on('acciones')->onDelete('cascade');
            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['accion_id','usuario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accion_usuario');
    }
}
