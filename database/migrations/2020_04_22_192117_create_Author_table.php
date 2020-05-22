<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorTable extends Migration
{

    public function up()
    {
        Schema::create('Author', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Authorname');
            $table->string('slug');
            $table->string('Address');
            $table->integer('BookNumber');
            $table->string('imagePath');
            $table->text('description');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('Author');
    }
}

