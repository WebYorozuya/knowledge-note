<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('link_id')->unsigned(); 
            $table->integer('post_id')->unsigned(); 
            $table->unique(['link_id', 'post_id']);
            $table->foreign('link_id')->references('id')->on('links')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('link_posts');
    }
}
