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
            $table->integer('graduation_year');
            $table->string('grade');
            $table->string('faculty');
            $table->string('experince');
            $table->string('hopies');
            $table->string('work_place');
            $table->string('work_nature');
            $table->string('work_time');
            $table->string('cv');
            $table->string('graduation_certificate');
            $table->string('confirmation_career');
            $table->string('picture');
            $table->string('privews_work');
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
