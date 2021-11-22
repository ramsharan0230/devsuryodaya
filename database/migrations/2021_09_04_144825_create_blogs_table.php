<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('short_description', 2500)->nullable();
            $table->text('description', 10000)->nullable();
            $table->string('slug')->nullable();
            $table->date('published_date')->nullable();
            $table->text('keyword')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('order')->default(1);

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            
            $table->boolean('publish', 0,1)->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('blogs');
    }
}
