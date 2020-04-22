<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Shopping_Cart_Items');
    }
}
