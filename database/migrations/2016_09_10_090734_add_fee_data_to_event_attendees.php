<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeeDataToEventAttendees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_attendees', function (Blueprint $table) {
            $table->string('fee_type');
            $table->decimal('fee_amount', 4, 2);
            $table->datetime('time_fee_paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_attendees', function (Blueprint    $table) {
            $table->dropColumn('fee_type');
            $table->dropColumn('fee_amount');
            $table->dropColumn('time_fee_paid');
        });
    }
}
