<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelanceServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelance_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_num');
            $table->string('city');
            $table->string('location');
            $table->string('service_description');
            $table->integer('accept')->default(0);
            $table->integer('work_alone')->default(0);
            $table->integer('accept_team')->default(0);


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
        Schema::dropIfExists('freelance_services');
    }
}
