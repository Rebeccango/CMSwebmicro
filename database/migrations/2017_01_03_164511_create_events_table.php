<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
					$table->increments('id');
					$table->string('title');
					$table->integer('author_id')->nullable();
					$table->timestamps();
					$table->text('content');
					$table->string('slug')->nullable();
					$table->string('start_time')->nullable();
					$table->string('end_time')->nullable();
					$table->string('meta_description');
					$table->string('meta_keywords');
					$table->string('status');
					$table->string('image')->nullable();
					$table->integer('category_id')->nullable();
					$table->text('excerpt');
					$table->integer('location_id');
					$table->integer('organizer');
					$table->string('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
