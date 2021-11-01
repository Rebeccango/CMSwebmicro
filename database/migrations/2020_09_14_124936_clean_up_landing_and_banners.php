<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CleanUpLandingAndBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('banners', 'button_style') && Schema::hasColumn('banners', 'subtitle_style')) {
            Schema::table('banners', function (Blueprint $table) {
                $table->dropColumn('button_style');
                $table->dropColumn('subtitle_style');
            });
        }

        if (Schema::hasColumn('landings', 'author_id')) {
            Schema::table('landings', function (Blueprint $table) {
                $table->integer('author_id')->nullable()->unsigned()->change();
            });
        }

        if (Schema::hasColumn('landings', 'seo_title')) {
            Schema::table('landings', function (Blueprint $table) {
                $table->string('seo_title', 255)->nullable()->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
