<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('slug');
            $table->string('avatar');
            $table->enum('gender', ['men', 'woman']);
            $table->timestamps();
        });

        Schema::create('homeTourist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tourist');
            $table->text('desct_tourist');
            $table->string('image_tourist');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_blogs_id')->unsigned();
            $table->foreign('user_blogs_id')->references('id')->on('user_blogs');
            $table->string('title_articles');
            $table->string('slug');
            $table->string('image_articles');
            $table->text('desc_articles');
            $table->timestamps();
        });

        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('about_title');
            $table->text('desc_about');
            $table->string('image_about');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
        Schema::dropIfExists('about');
        Schema::dropIfExists('homeTourist');
        Schema::dropIfExists('user_blogs');
    }
};
