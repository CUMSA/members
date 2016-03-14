<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function ($table) {
            $table->softDeletes();
        });
        Schema::table('colleges', function ($table) {
            $table->softDeletes();
        });
        Schema::table('scholarships', function ($table) {
            $table->softDeletes();
        });
        Schema::table('courses', function ($table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
