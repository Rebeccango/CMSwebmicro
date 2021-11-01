<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomizationFieldsForLandingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('landings', function (Blueprint $table) {
            $table->boolean('hide_banner_btns')->default(false)->nullable();
            $table->boolean('hide_banner')->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('landings', function (Blueprint $table) {
            $table->dropColumn('hide_banner_btns');
            $table->dropColumn('hide_banner');
        });
    }
}
