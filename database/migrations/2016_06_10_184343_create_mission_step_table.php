<?php

use Illuminate\Database\Migrations\Migration;

class CreateMissionStepTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mission_step', function ($table) {
            $table->increments('id');
            $table->integer('mission_id')->refernces('id')->on('missions');
            $table->integer('step_id')->refernces('id')->on('steps');
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
