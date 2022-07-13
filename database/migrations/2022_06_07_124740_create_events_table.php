<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('slug')->unique();
            $table->string('type');
            $table->string('description');
            $table->string('picture');
            $table->dateTime('end_time');
            $table->foreignId('district_id')
                ->nullable(true)
                ->references('id')
                ->on('districts')
                ->onDelete('cascade');
            $table->foreignId('community_id')
                ->nullable(true)
                ->references('id')
                ->on('communities')
                ->onDelete('cascade');
            $table->foreignId('topic_id')
                ->nullable(true)
                ->references('id')
                ->on('topics')
                ->onDelete('cascade');
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
        Schema::dropIfExists('events');
    }
}
