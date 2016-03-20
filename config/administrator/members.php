<?php

/**
 * Members model config
 */

return array(

	'title' => 'Members',

	'single' => 'member',

	'model' => 'App\Member',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'full_name' => array(
			'title' => 'Name',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
		),
		'gender' => array(
			'title' => 'Gender',
		),
		'date_of_birth' => array(
			'title' => 'Date of Birth',
		),
		'nationality' => array(
			'title' => 'Nationality',
		),
		'is_singapore_pr' => array(
			'title' => 'Is Singapore PR?',
		),
		'nric' => array(
			'title' => 'NRIC',
		),
		'crsid' => array(
			'title' => 'CRSID',
		),
		'email_hermes' => array(
			'title' => 'Hermes Email',
		),
		'email_others' => array(
			'title' => 'Alternative Email',
		),
		'mobile_uk' => array(
			'title' => 'UK Mobile',
		),
		'mobile_home' => array(
			'title' => 'Home Mobile',
		),
		'address_home' => array(
			'title' => 'Home Address',
		),
		'start_year' => array(
			'title' => 'Start Year',
		),
		'end_year' => array(
			'title' => 'End Year',
		),
		'college_id' => array(
			'title' => 'College',
		),
		'course_id' => array(
			'title' => 'Course',
		),
		'registration_time' => array(
			'title' => 'Registration Time',
		),
		'membership_type' => array(
			'title' => 'Membership Type',
		),
		'is_fee_paid' => array(
			'title' => 'Paid?',
		),
		'release_info' => array(
			'title' => 'Release Info?',
		),
		'remarks' => array(
			'title' => 'Remarks',
		),
		// 'num_films' => array(
		// 	'title' => '# films',
		// 	'relationship' => 'films',
		// 	'select' => 'COUNT((:table).id)',
		// ),
		// 'formatted_birth_date' => array(
		// 	'title' => 'Birth Date',
		// 	'sort_field' => 'birth_date',
		// ),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'first_name' => array(
			'title' => 'First Name',
		),
		'last_name' => array(
			'title' => 'Last Name',
		),
		'gender' => array(
			'title' => 'Gender',
		),
		'date_of_birth' => array(
			'title' => 'Date of Birth',
		),
		'nationality' => array(
			'title' => 'Nationality',
		),
		'is_singapore_pr' => array(
			'title' => 'Is Singapore PR?',
		),
		'nric' => array(
			'title' => 'NRIC',
		),
		'crsid' => array(
			'title' => 'CRSID',
		),
		'email_hermes' => array(
			'title' => 'Hermes Email',
		),
		'email_others' => array(
			'title' => 'Alternative Email',
		),
		'mobile_uk' => array(
			'title' => 'UK Mobile',
		),
		'mobile_home' => array(
			'title' => 'Home Mobile',
		),
		'address_home' => array(
			'title' => 'Home Address',
		),
		'start_year' => array(
			'title' => 'Start Year',
		),
		'end_year' => array(
			'title' => 'End Year',
		),
		'college_id' => array(
			'title' => 'College',
		),
		'course_id' => array(
			'title' => 'Course',
		),
		'registration_time' => array(
			'title' => 'Registration Time',
		),
		'membership_type' => array(
			'title' => 'Membership Type',
		),
		'is_fee_paid' => array(
			'title' => 'Paid?',
		),
		'release_info' => array(
			'title' => 'Release Info?',
		),
		'remarks' => array(
			'title' => 'Remarks',
		),


		// 'films' => array(
		// 	'title' => 'Films',
		// 	'type' => 'relationship',
		// 	'name_field' => 'name',
		// ),
		// 'birth_date' => array(
		// 	'title' => 'Birth Date',
		// 	'type' => 'date'
		// ),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'first_name' => array(
			'title' => 'First Name',
			'type' => 'text',
		),
		'last_name' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),
		'gender' => array(
			'title' => 'Gender',
		),
		'date_of_birth' => array(
			'title' => 'Date of Birth',
		),
		'nationality' => array(
			'title' => 'Nationality',
		),
		'is_singapore_pr' => array(
			'title' => 'Is Singapore PR?',
		),
		'nric' => array(
			'title' => 'NRIC',
		),
		'crsid' => array(
			'title' => 'CRSID',
		),
		'email_hermes' => array(
			'title' => 'Hermes Email',
		),
		'email_others' => array(
			'title' => 'Alternative Email',
		),
		'mobile_uk' => array(
			'title' => 'UK Mobile',
		),
		'mobile_home' => array(
			'title' => 'Home Mobile',
		),
		'address_home' => array(
			'title' => 'Home Address',
		),
		'start_year' => array(
			'title' => 'Start Year',
		),
		'end_year' => array(
			'title' => 'End Year',
		),
		'college_id' => array(
			'title' => 'College',
		),
		'course_id' => array(
			'title' => 'Course',
		),
		'membership_type' => array(
			'title' => 'Membership Type',
		),
		'is_fee_paid' => array(
			'title' => 'Paid?',
		),
		'release_info' => array(
			'title' => 'Release Info?',
		),
		'remarks' => array(
			'title' => 'Remarks',
		),
		// 'birth_date' => array(
		// 	'title' => 'Birth Date',
		// 	'type' => 'date',
		// ),
		// 'films' => array(
		// 	'title' => 'Films',
		// 	'type' => 'relationship',
		// 	'name_field' => 'name',
		// ),
	),

);
