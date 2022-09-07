<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add__stocks', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('order');
          $table->string('name_stock');
          $table->integer('amount_unit');
          $table->decimal('price_per_unit',16);
          $table->decimal('commission',16);
            $table->decimal('trading',16);
              $table->decimal('clearingfee',16);
                $table->decimal('vat',16);
                  $table->decimal('netamount',16);
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
        Schema::dropIfExists('add__stocks');
    }
}
