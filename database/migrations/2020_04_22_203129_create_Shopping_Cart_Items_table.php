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
            $table->integer('BookId');
            $table->decimal('Quantity');
            $table->decimal('UnitPrice');
            $table->decimal('SubTotal');
            $table->foreign('DocumentNo')->references('No')->on('Shopping_Cart_Header');
            $table->primary(array('LineNo','DocumentNo'));


        });
    }

    public function down()
    {
        Schema::dropIfExists('Shopping_Cart_Items');
    }
}
