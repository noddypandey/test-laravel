<?php

use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('questions', function ($table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->text('description');
            $table->string('answer');
            $table->string('google_search_text');
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
