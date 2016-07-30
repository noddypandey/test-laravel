<?php

use Illuminate\Database\Migrations\Migration;

class CreateOptionQuestionTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('option_question', function ($table) {
            $table->increments('id');
            $table->integer('question_id')->refernces('id')->on('questions');
            $table->integer('option_id')->refernces('id')->on('options');
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
