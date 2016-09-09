<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([			'id' => 2, 
			'last_name' => 'Tan',
			'first_name' => 'Han Liang',
			'gender' => 'Male',
			'date_of_birth' => new DateTime('1945-04-04'),
			'nationality' => 'Guatemalan',
			'is_singapore_pr' => false,
			'nric' => 's2342342j',
			'crsid' => 'hlt38',
			'email_hermes' => 'hlt38@cam.ac.uk',
			'email_other' => 'GO_AWAY_MORON@hotmail.com',
			'mobile_uk' => 'I AM SO ANNOYED RIGHT NOW',
			'mobile_home' => 'AAAAAAA',
			'address_home' => 'LFSJLDFFL',
			'address_uk' => 'address uk',
			'release_info' => true,
			'start_year' => 2020,
			'end_year' => 2023,
			'registration_time' => new DateTime('1995-04-04'),
			'membership_type' => 'Life',
			'is_fee_paid' => true,
			'is_card_issued' => true,
			'remarks' => 'OKAY NOW THEN I READ ABOUT MODEL FACTORIES',
			'created_at' => new DateTIme('1997-03-30'),
			'updated_at' => new DateTIme('1997-03-30'),
			'college_id' => 1,
			'course_id' => 1,
			'scholarship_id' => 1,
			'deleted_at' => null,
			'course_others' => "ADLSJAS",
			'previous_school' => "ACSI THE GREATEST SCHOOL IN THE WORLD"		]);
    }
}
