<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('midname');
            $table->string('lastname');
            $table->string('religion');
            $table->string('gender');
            $table->unsignedInteger('birthday');
            $table->unsignedInteger('birthmonth');
            $table->unsignedInteger('birthyear');
            $table->string('profile_slug');
            $table->string('home_address');
            $table->string('res_country');
            $table->string('res_state');
            $table->string('res_city');
            $table->string('org_country');
            $table->string('org_state');
            $table->string('org_lga');
            $table->string('app_id');
            $table->string('app_type');
            $table->string('app_status');

            $table->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('country_id')
                ->references('id')
                ->on('countries')
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
        Schema::dropIfExists('profiles');
    }
}
