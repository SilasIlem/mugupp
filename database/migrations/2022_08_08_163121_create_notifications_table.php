<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [
                'post', 'event', 'community', 'district', 'comment', 'thread', 'quest'
            ]);
            $table->boolean('seen');
            $table->boolean('read');
            $table->foreignId('recipient_id')
                ->nullable(true)
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('post_id')
                ->nullable(true)
                ->references('id')
                ->on('posts')
                ->onDelete('cascade');
            $table->foreignId('comment_id')
                ->nullable(true)
                ->references('id')
                ->on('comments')
                ->onDelete('cascade');
            $table->foreignId('reply_id')
                ->nullable(true)
                ->references('id')
                ->on('comments')
                ->onDelete('cascade');
            $table->foreignId('community_id')
                ->nullable(true)
                ->references('id')
                ->on('communities')
                ->onDelete('cascade');
            $table->foreignId('event_id')
                ->nullable(true)
                ->references('id')
                ->on('events')
                ->onDelete('cascade');
            $table->foreignId('thread_id')
                ->nullable(true)
                ->references('id')
                ->on('threads')
                ->onDelete('cascade');
            $table->foreignId('quest_id')
                ->nullable(true)
                ->references('id')
                ->on('quests')
                ->onDelete('cascade');
            $table->text('text');
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
        Schema::dropIfExists('notifications');
    }
}
