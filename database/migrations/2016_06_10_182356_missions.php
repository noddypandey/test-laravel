<?php

use Illuminate\Database\Migrations\Migration;

class Missions extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('missions', function ($table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->text('coins');
            $table->integer('tries');
            $table->integer('duration');
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
