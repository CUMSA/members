<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeStuffNullableMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            // Make them nullable. ->nullable()->change() (or other generated ALTERs) does not work because table contains enum column.
            DB::statement('ALTER TABLE members MODIFY crsid VARCHAR(255)');
            DB::statement('ALTER TABLE members MODIFY nric VARCHAR(255)');
            DB::statement('ALTER TABLE members MODIFY mobile_uk VARCHAR(255)');
            DB::statement('ALTER TABLE members MODIFY mobile_home VARCHAR(255)');
            DB::statement('ALTER TABLE members MODIFY address_uk TEXT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE members MODIFY crsid VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE members MODIFY nric VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE members MODIFY mobile_uk VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE members MODIFY mobile_home VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE members MODIFY address_uk TEXT NOT NULL');
    }
}
