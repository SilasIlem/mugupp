<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt');
            $table->foreignId('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('updated_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('community_id')
                ->references('id')
                ->on('communities')
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
        Schema::dropIfExists('topics');
    }
}
