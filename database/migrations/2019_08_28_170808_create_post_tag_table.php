<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');

           // $table->primary(['post_id', 'tag_id']);
          //  $table->unsignedBigInteger('post_id');
          //  $table->unsignedBigInteger('tag_id');

           // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
           // $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('post_tag');
    }
}
