<?php

use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('avatar');
            $table->integer('lives');
            $table->boolean('email_verified');
            $table->boolean('phone_verified');
            $table->string('referral_token');
            $table->string('email_verification_token');
            $table->string('password');
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
