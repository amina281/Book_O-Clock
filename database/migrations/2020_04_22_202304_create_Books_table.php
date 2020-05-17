<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{

    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->increments('ISBN');
            $table->string('Title');
            $table-> string('slug');
            $table->integer('PageNum');
            $table->unsignedInteger('AuthorId');
            $table->float('Rate');
            $table->decimal('Price');
            $table->dateTime('Published');
            $table->string('Language');
            $table->foreign('AuthorId')->references('Id')->on('Author');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('Books');
    }
}
