<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->char('sex'); //m for male f for female
            $table->string('identifcation_no');
            $table->string('marital_status');
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('city');
            $table->string('address');
            $table->string('phone_num');
            $table->string('whats_num');
            $table->string('email');
            $table->string('qualification');
            $table->string('graduation_year');
            $table->string('grade');
            $table->string('faculty');
            $table->string('experince')->nullable();
            $table->string('hopies')->nullable();
            $table->string('work_place')->nullable();
            $table->string('work_nature')->nullable();
            $table->string('work_time')->nullable();
            $table->string('cv');
            $table->string('graduation_certificate');
            $table->string('confirmation_career')->nullable();
            $table->string('picture')->nullable();
            $table->text('privews_work')->nullable();
            $table->string('show_work');
            $table->string('how_know_us');
            $table->integer('done')->default(0); //1 for become memeber 0 for not
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
        Schema::dropIfExists('freelancers');
    }
}
