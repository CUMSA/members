<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');

            $table->string('last_name');
            $table->string('first_name');
            $table->enum('gender', ['Male', 'Female']);

            // Nationality and DOB are nullable because some people do not want to declare.
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->nullable();

            $table->boolean('is_singapore_pr');
            $table->string('nric');
            $table->string('crsid')->unique();

            $table->string('email_hermes');
            $table->string('email_other')->nullable();
            $table->string('mobile_uk');
            $table->string('mobile_home');
            $table->text('address_home')->nullable();
            $table->text('address_uk');

            $table->boolean('release_info');

            $table->integer('start_year');
            $table->integer('end_year');

            $table->datetime('registration_time');
            $table->enum('membership_type', ['Life', '1 year']);
            $table->boolean('is_fee_paid');
            $table->boolean('is_card_issued');
            $table->text('remarks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
