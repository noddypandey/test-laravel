<?php

use Illuminate\Database\Migrations\Migration;

class CreateInstructionnStepTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('instruction_step', function ($table) {
            $table->increments('id');
            $table->integer('instruction_id')->refernces('id')->on('instructions');
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
