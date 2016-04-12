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
		'crsid' => array(
			'title' => 'CRSID',
		),
		'full_name' => array(
			'title' => 'Name',
			'select' => "CONCAT((:table).first_name, ' ', (:table).last_name)",
		),
		'college_name' => array(
			'title' => 'College',
			'relationship' => 'college',
			'select' => "(:table).name",
		),
		'course_name' => array(
			'title' => 'Course',
			'relationship' => 'course',
			'select' => "(:table).name",
		),
		'mobile_uk' => array(
			'title' => 'UK Mobile',
		),
		'email_hermes' => array(
			'title' => 'Hermes Email',
		),
		'scholarship_name' => array(
			'title' => 'Scholarship',
			'relationship' => 'scholarship',
			'select' => "(:table).name",
		),
		'gender' => array('title' => 'Gender'),
		'date_of_birth' => array('title' => 'Date of Birth'),
		'start_year' => array(
			'title' => 'Start Year',
		),
		'end_year' => array(
			'title' => 'End Year',
		),
		'registration_time' => array(
			'title' => 'Registration Time',
		),
		'membership_type' => array(
			'title' => 'Membership Type',
		),
		'is_fee_paid' => array(
			'title' => 'Paid?',
			'select' => "IF((:table).is_fee_paid, 'Yes', 'No')",
		),
		'remarks' => array(
			'title' => 'Remarks',
		),
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
		'email_other' => array(
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
			'type' => 'enum',
			'options' => \App\Member::$options_gender,
		),
		'date_of_birth' => array(
			'title' => 'Date of Birth',
			'type' => 'date',
		),
		'nationality' => array(
			'title' => 'Nationality',
		),
		'is_singapore_pr' => array(
			'title' => 'Is Singapore PR?',
			'type' => 'bool',
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
		'email_other' => array(
			'title' => 'Alternative Email',
		),
		'mobile_uk' => array(
			'title' => 'Mobile (UK)',
		),
		'mobile_home' => array(
			'title' => 'Mobile (Home)',
		),
		'address_home' => array(
			'title' => 'Home Address',
			'type' => 'textarea',
		),
		'address_uk' => array(
			'title' => 'Cambridge Address',
			'type' => 'textarea',
		),
		'start_year' => array(
			'title' => 'Start Year',
			'type' => 'number',
		),
		'end_year' => array(
			'title' => 'End Year',
			'type' => 'number',
		),
		'college' => array(
			'title' => 'College',
			'type' => 'relationship',
		),
		'course' => array(
			'title' => 'Course',
			'type' => 'relationship',
		),
		'scholarship' => array(
			'title' => 'Scholarship',
			'type' => 'relationship',
		),
		'membership_type' => array(
			'title' => 'Membership Type',
			'type' => 'enum',
			'options' => \App\Member::$options_membership_type,
		),
		'is_fee_paid' => array(
			'title' => 'Paid?',
			'type' => 'bool',
		),
		'release_info' => array(
			'title' => 'Release Info?',
			'type' => 'bool',
		),
		'remarks' => array(
			'title' => 'Remarks',
			'type' => 'textarea',
		),
	),

);
