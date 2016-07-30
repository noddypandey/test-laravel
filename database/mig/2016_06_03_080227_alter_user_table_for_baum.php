<?php

use Illuminate\Database\Migrations\Migration;

class AlterUserTableForBaum extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function ($table) {
          $table->integer('parent_id')->nullable()->index();
          $table->integer('lft')->nullable()->index();
          $table->integer('rgt')->nullable()->index();
          $table->integer('depth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('lft');
            $table->dropColumn('rgt');
            $table->dropColumn('depth');
        });
    }
}
