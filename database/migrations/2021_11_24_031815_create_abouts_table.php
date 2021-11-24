<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('main_description')->nullable();
            $table->string('background_image')->nullable();
            $table->string('main_image')->nullable();
            $table->string('first_icon_title')->nullable();
            $table->longText('first_icon_description')->nullable();
            $table->string('second_icon_title')->nullable();
            $table->longText('second_icon_description')->nullable();
            $table->string('third_icon_title')->nullable();
            $table->longText('third_icon_description')->nullable();
            $table->string('fourth_icon_title')->nullable();
            $table->longText('fourth_icon_description')->nullable();
            $table->string('about_title')->nullable();
            $table->boolean('publish', 0,1)->default(1);
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
        Schema::dropIfExists('abouts');
    }
}
