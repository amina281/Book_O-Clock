<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('Id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->integer('phonenumber')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('verified')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
