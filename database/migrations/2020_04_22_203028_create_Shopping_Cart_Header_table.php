<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartHeaderTable extends Migration
{

    public function up()
    {
        Schema::create('Shopping_Cart_Header', function (Blueprint $table) {
            $table->increments('No');
            $table->string('CustomerAddress');
            $table->integer('TotalAmount');
            $table->unsignedInteger('CustomerId');
            $table->foreign('CustomerId')->references('id')->on('users');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('Shopping_Cart_Header');
    }
}
