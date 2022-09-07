<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add__funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order');
            $table->string('name_fund');
            $table->string('amount_unit');
            $table->string('price_per_unit');
            $table->string('amount_bath');
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
        Schema::dropIfExists('add__funds');
    }
}
