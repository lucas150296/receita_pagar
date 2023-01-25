<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitaPagarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receita_pagars', function (Blueprint $table) {
            $table->id();
            $table->string('description', 100);
            $table->string('clientName', 100);
            $table->string('value', 100);
            $table->dateTime('dueDate');
            $table->dateTime('payDate');
            $table->string('status', 100);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receita_pagars');
    }
}
