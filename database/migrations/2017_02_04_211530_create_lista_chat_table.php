<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listachat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mesage')->unsigned();
            $table->foreign('id_mesage')->references('id')->on('mesages');
            $table->integer('id_chat')->unsigned();
            $table->foreign('id_chat')->references('id')->on('chat');
            //$table->foreign('id_mesage')->references('id')->on('mesage');
            //$table->foreign('id_chat')->references('id')->on('chat');
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
        Schema::dropIfExists('listachat');
    }
}
