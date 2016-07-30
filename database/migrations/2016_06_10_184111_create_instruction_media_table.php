<?php

use Illuminate\Database\Migrations\Migration;

class CreateInstructionMediaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('instruction_media', function ($table) {
            $table->increments('id');
            $table->integer('instruction_id')->refernces('id')->on('instructions');
            $table->integer('media_id')->refernces('id')->on('media');
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
