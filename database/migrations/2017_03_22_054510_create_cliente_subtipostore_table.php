<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteSubtipostoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_subtipostore', function(Blueprint $table)
        {
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade');

            $table->integer('subtipostore_id')->unsigned()->nullable();
            $table->foreign('subtipostore_id')->references('id')->on('subtipostore')->onDelete('cascade');

            $table->timestamps();

            $table->primary(['cliente_id', 'subtipostore_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente_subtipostore');
    }
}
