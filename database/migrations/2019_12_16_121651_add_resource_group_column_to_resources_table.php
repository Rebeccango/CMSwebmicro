<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResourceGroupColumnToResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->unsignedInteger('resource_group_id')->nullable();
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
            $table->dropColumn('resource_group_id');
        });
    }
}
