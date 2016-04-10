<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->integer('college_id')->unsigned();
            $table->foreign('college_id')->references('id')->on('colleges');

            $table->integer('scholarship_id')->unsigned();
            $table->foreign('scholarship_id')->references('id')->on('scholarships');

            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign('members_college_id_foreign');
            $table->dropForeign('members_scholarship_id_foreign');
            $table->dropForeign('members_course_id_foreign');

            $table->dropColumn('college_id');
            $table->dropColumn('scholarship_id');
            $table->dropColumn('course_id');
        });
    }
}
