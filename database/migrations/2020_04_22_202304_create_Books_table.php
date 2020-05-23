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
        $table->string('Title')->unique();
        $table->string('slug')->unique();
        $table->string('imagePath');
        $table->integer('PageNum');
        $table->unsignedInteger('AuthorId');
        $table->float('Rate')->default(0);
        $table->decimal('Price');
        $table->date('Published');
        $table->string('Language')->default('English');
        $table->text('literaryAwards')->nullable();
        $table->text('Description')->nullable();
        $table->text('criticRev')->nullable();
        $table->string('criticName')->nullable();
        $table->string('criticImagePath')->nullable();
        $table->foreign('AuthorId')->references('Id')->on('Author');
        $table->timestamps();

    });
    }


    public function down()
    {
        Schema::dropIfExists('Books');
    }
}
