<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_num')->nullable();
            $table->string('whats_num')->nullable();
            $table->string('email')->nullable();
            $table->text('termsandconditions_clients');
            $table->text('termsandconditions_freelancers');
            $table->string('account_num');
            $table->text('projects_into');
            $table->text('about_into');
            $table->text('privacy_into');
            $table->string('logo');
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
        Schema::dropIfExists('settings');
    }
}
