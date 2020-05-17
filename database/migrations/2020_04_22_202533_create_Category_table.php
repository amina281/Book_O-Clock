<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{

    public function up()
    {
        Schema::create('Category', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Name');
            $table->string('Description');
            $table->timestamps();

        });
    }
}
