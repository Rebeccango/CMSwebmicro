<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('company_id');
            $table->string('name');
            $table->string('image')->nullable()->default(null);
            $table->string('industry')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->string('slug')->unique();
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('company_products');
    }
}
