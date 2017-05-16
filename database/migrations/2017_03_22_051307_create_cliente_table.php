<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->nullable();
            $table->string('descripcion_cliente')->nullable();
            $table->integer('canal_id')->unsigned()->index()->nulleable();
            $table->integer('subcanal_id')->unsigned()->index()->nulleable();
            $table->integer('tipo_id')->unsigned()->index()->nulleable();
            $table->integer('key_account')->unsigned()->index()->nulleable();
            $table->integer('vendedor')->unsigned()->index()->nulleable();
            $table->string('contacto')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->timestamps();
            $table->foreign('canal_id')->references('id')->on('canal');
            $table->foreign('subcanal_id')->references('id')->on('subcanal');
            $table->foreign('tipo_id')->references('id')->on('tipostore');
            $table->foreign('key_account')->references('id')->on('colaborador');
            $table->foreign('vendedor')->references('id')->on('colaborador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente');
    }
}
