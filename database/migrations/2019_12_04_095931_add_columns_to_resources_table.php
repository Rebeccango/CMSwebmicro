<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->string('button')->nullable()->default(null);
            $table->string('industry')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->string('company_name')->nullable()->default(null);
            $table->string('company_logo')->nullable()->default(null);
            $table->string('video')->nullable()->default(null);
            $table->text('form')->nullable()->default(null);
            $table->longText('content')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->dropColumn('button');
            $table->dropColumn('industry');
            $table->dropColumn('website');
            $table->dropColumn('location');
            $table->dropColumn('company_name');
            $table->dropColumn('company_logo');
            $table->dropColumn('video');
            $table->dropColumn('form');
            $table->dropColumn('content');
        });
    }
}
