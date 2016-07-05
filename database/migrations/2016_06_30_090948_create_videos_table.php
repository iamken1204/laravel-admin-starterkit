<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('youtube_code', 16)->unique();
            $table->string('title', 15)->index();
            $table->text('intro');
            $table->string('author', 15)->index();
            // The second argument for integer() is the flag for autoincrement
            // and the third is for unsigned.
            // func (table *Blueprint) Integer(columnName string, autoIncrement, unsigned bool)
            $table->integer('likes', false, true)->index();
            $table->integer('theme_id', false, true)->index();
            $table->string('thumb_url');
            $table->enum('in_activity', [0, 1])->default(0);
            $table->text('activity');
            $table->string('keyword')->index();
            $table->integer('sort', false, true)->index();
            $table->integer('created_at', false, true)->length(10);
            $table->integer('updated_at', false, true)->length(10);
        });

        Schema::create('videos_carousel', function(Blueprint $table) {
            $table->increments('id');
            // The second argument for integer() is the flag for autoincrement
            // and the third is for unsigned.
            $table->integer('video_id', false, true)->index();
            $table->string('title', 15);
            $table->enum('status', [0, 1])->default(1)->index();
            $table->integer('started_at', false, true)->length(10)->index();
            $table->integer('ended_at', false, true)->length(10)->index();
            $table->integer('created_at', false, true)->length(10)->index();
            $table->integer('updated_at', false, true)->length(10);
        });
        Schema::create('videos_recommend', function(Blueprint $table) {
            $table->increments('id');
            // The second argument for integer() is the flag for autoincrement
            // and the third is for unsigned.
            $table->integer('video_id', false, true)->length(10)->index();
            $table->string('title', 15);
            $table->enum('status', [0, 1])->default(1)->index();
            $table->integer('started_at', false, true)->length(10)->index();
            $table->integer('ended_at', false, true)->length(10)->index();
            $table->integer('created_at', false, true)->length(10)->index();
            $table->integer('updated_at', false, true)->length(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
        Schema::drop('videos_carousel');
    }
}
