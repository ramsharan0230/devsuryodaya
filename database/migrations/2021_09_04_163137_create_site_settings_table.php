<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile')->nullable();
            $table->string('location')->nullable();
            $table->string('location_url', 500)->nullable();
            $table->string('map', 500)->nullable();
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('customer_care_phone')->nullable();
            $table->string('customer_care_email')->nullable();
            $table->string('logo')->nullable();
            $table->string('service_banner1')->nullable();
            $table->string('service_banner2')->nullable();
            $table->string('service_banner3')->nullable();
            $table->boolean('publish', 0, 1)->default(1);
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
        Schema::dropIfExists('site_settings');
    }
}
