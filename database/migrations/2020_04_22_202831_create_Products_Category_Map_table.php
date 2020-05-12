<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookCategoryMapTable extends Migration
{

    public function up()
    {
        Schema::create('Book_Category_Map', function (Blueprint $table) {
            $table->unsignedInteger('CategoryId');
            $table->unsignedInteger('BookId');
            $table->primary(array('CategoryId','BookId'));
            $table->foreign('CategoryId')->references('Id')->on('Category');
            $table->foreign('BookId')->references('ISBN')->on('Books');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Book_Category_Map');
    }
}
