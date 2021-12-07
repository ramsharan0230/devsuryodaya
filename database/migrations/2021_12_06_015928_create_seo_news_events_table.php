<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoNewsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_news_events', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->string('meta_subtitle')->nullable();
            $table->text('meta_description', 5000)->nullable();
            $table->text('meta_phrase', 500)->nullable();
            $table->string('keyword', 500)->nullable();
            $table->unsignedBigInteger('news_event_id');

            $table->foreign('news_event_id')->references('id')->on('news_events')->onDelete('cascade');
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
        Schema::dropIfExists('seo_news_events');
    }
}
