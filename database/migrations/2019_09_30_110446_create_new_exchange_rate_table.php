<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewExchangeRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->char('sourceCurrency',3);
            $table->char('targetCurrency',3);
            $table->float('rate', 8, 6);
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
        Schema::dropIfExists('exchange_rates');
    }
}
