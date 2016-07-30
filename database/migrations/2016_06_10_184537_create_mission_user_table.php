<?php

use Illuminate\Database\Migrations\Migration;

class CreateMissionUserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('results', function ($table) {
            $table->increments('id');
            $table->integer('mission_id')->references('id')->on('missions');
            $table->integer('user_id')->references('id')->on('users');
            $table->string('status');
            $table->integer('tries_left');
            $table->date('expiry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
}
