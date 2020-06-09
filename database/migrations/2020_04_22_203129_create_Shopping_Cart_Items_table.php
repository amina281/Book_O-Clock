<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartItemsTable extends Migration
{

    public function up()
    {
        Schema::create('Shopping_Cart_Items', function (Blueprint $table) {
            $table->integer('LineNo');
            $table->unsignedInteger('DocumentNo');
            $table->foreign('DocumentNo')->references('No')->on('Shopping_Cart_Header');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('ISBN')->on('Books');
            $table->decimal('quantity')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Shopping_Cart_Items');
    }
}
