<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcanalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcanal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_subcanal')->nullable();
            $table->integer('canal_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('canal_id')->references('id')->on('canal')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subcanal');
    }
}
