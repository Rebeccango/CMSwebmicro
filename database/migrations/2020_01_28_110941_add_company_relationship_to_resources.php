<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyRelationshipToResources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resources', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('company_logo');
            $table->unsignedBigInteger('company_id')->nullable();
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->string('website');
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
            $table->dropColumn('company_id');
            $table->string('company_name')->nullable()->default(null);
            $table->string('company_logo')->nullable()->default(null);
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('website');
        });
    }
}
