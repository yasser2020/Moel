<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->char('sex'); //m for male f for female
            $table->string('nationality');
            $table->string('city');
            $table->string('address');
            $table->string('phone_num');
            $table->string('whats_num');
            $table->string('email');
            $table->string('how_know_us');
            $table->integer('subscription')->default(0);//1 for accept 0 for not accept
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
        Schema::dropIfExists('clients');
    }
}
