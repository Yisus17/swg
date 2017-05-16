<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtipostoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtipostore', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_subtipo')->nullable();
            $table->integer('tipostore_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('tipostore_id')->references('id')->on('tipostore')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subtipostore');
    }
}
