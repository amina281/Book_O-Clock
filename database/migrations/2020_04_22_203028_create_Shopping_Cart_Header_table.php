<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Shopping_Cart_Header', function (Blueprint $table) {
            $table->increments('No');
            $table->string('CustomerAddress');
            $table->integer('TotalAmount');
            $table->unsignedInteger('CustomerId');
            $table->foreign('CustomerId')->references('Id')->on('Customer');


        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Shopping_Cart_Header');
    }
}
