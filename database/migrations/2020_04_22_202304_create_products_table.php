<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
        $table->increments('ISBN');
        $table->string('Title');
        $table->string('slug')->unique();
        $table->integer('PageNum');
        $table->unsignedInteger('AuthorId');
        $table->float('Rate');
        $table->decimal('Price');
        $table->dateTime('Published');
        $table->string('Language')->default('English');
        $table->text('Description');
        $table->foreign('AuthorId')->references('Id')->on('Author');
        $table->timestamps();

    });
    }


    public function down()
    {
        Schema::dropIfExists('Books');
    }
}
