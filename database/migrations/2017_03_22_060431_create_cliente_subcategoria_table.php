<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteSubcategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_subcategoria', function(Blueprint $table)
        {
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->integer('subcategoria_id')->unsigned()->nullable();
            $table->foreign('subcategoria_id')->references('id')->on('subcategoria')->onDelete('cascade');

            $table->timestamps();

            $table->primary(['cliente_id', 'subcategoria_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente_subcategoria');
    }
}
