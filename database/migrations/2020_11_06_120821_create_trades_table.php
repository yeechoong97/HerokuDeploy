<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('ticketID');
            $table->string('pair');
            $table->integer('units');
            $table->string('type',5);
            $table->double('entry_price');
            $table->double('exit_price');
            $table->decimal('cost');
            $table->decimal('profit');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('accounts');
            $table->foreign('ticketID')->references('ticketID')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
