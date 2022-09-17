<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_posts');
            $table->string('title', '100');
            $table->text('content');
            $table->string('cover_img');
            $table->string('tag', '50');
            $table->unsignedBigInteger('id_categories')->nullable();
            $table->enum('type', ['pengumuman', 'berita', 'artikel']);
            $table->boolean('is_focus');
            $table->timestamps();
            $table->foreign('id_categories')->references('id_categories')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
