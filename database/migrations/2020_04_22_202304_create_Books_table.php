<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('Books', function (Blueprint $table) {
        $table->string('ISBN');
        $table->string('Title');
        $table->integer('PageNum');
        $table->unsignedInteger('AuthorId');
        $table->float('Rate');
        $table->decimal('Price');
        $table->dateTime('Published');
        $table->string('Language');
        $table->primary('ISBN');
        $table->foreign('AuthorId')->references('Id')->on('Author');


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Books');
    }
}
