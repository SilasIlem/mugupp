<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('small_picture');
            $table->string('large_picture');
            $table->text('excerpt');
            $table->string('description');
            $table->string('color_preference');
            $table->foreignId('district_id')
                ->references('id')
                ->on('districts')
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
        Schema::dropIfExists('district_profiles');
    }
}
