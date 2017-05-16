<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTipostoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_tipostore', function(Blueprint $table)
        {
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->integer('tipostore_id')->unsigned()->nullable();
            $table->foreign('tipostore_id')->references('id')->on('tipostore')->onDelete('cascade');

            $table->timestamps();

            $table->primary(['cliente_id', 'tipostore_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente_tipostore');
    }
}
