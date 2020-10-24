<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->integer('ticketID')->unique();
            $table->string('pair');
            $table->integer('units');
            $table->string('type',5);
            $table->decimal('entry_price');
            $table->decimal('exit_price')->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('profit')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('orders');
    }
}
