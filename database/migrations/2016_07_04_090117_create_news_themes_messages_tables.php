<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsThemesMessagesTables extends Migration
{
    /**
     * table name: news
     * @var string
     */
    public $tNews = 'news';

    /**
     * table name: themes
     * @var string
     */
    public $tThemes = 'themes';

    /**
     * table name: messages
     * @var string
     */
    public $tMessages = 'messages';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tNews, function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 256);
            $table->text('context');
            $table->enum('status', [0, 1])->default(1);
            $table->integer('started_at', false, true)->length(10)->index();
            $table->integer('ended_at', false, true)->length(10)->index();
            $table->integer('created_at', false, true)->length(10)->index();
            $table->integer('updated_at', false, true)->length(10);
        });

        Schema::create($this->tThemes, function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 8);
            $table->string('context', 128);
            $table->string('banner_url', 256);
            $table->integer('sort', false, true)->index();
            $table->integer('created_at', false, true)->length(10)->index();
            $table->integer('updated_at', false, true)->length(10);
        });

        Schema::create($this->tMessages, function(Blueprint $table) {
            $table->increments('id');
            $table->integer('video_id', false, true)->index();
            $table->integer('parent_id', false, true)->index();
            $table->integer('yam_id', false, true);
            $table->string('yam_name', 32);
            $table->smallInteger('likes')->unsigned();
            $table->string('context');
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
        Schema::drop($this->tNews);
        Schema::drop($this->tThemes);
        Schema::drop($this->tMessages);
    }
}
