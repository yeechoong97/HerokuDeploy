<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('user_id');
            $table->string('name');
            $table->string('gender');
            $table->string('phone');
            $table->string('email');
            $table->integer('tutorial')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
