<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('answers', function ($table) {
            $table->increments('id');
            $table->integer('question_id')->references('id')->on('questions');
            $table->integer('result_id')->references('id')->on('results');
            $table->string('value');
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
