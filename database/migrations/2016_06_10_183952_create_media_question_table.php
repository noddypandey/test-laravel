<?php

use Illuminate\Database\Migrations\Migration;

class CreateMediaQuestionTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('media_question', function ($table) {
            $table->increments('id');
            $table->integer('media_id')->refernces('id')->on('media');
            $table->integer('question_id')->refernces('id')->on('questions');
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
