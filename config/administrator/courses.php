<?php

/**
 * Actors model config
 */

return array(

	'title' => 'Courses',

	'single' => 'course',

	'model' => 'App/Course',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Course Name',
		),
		'course_type' => array(
			'title' => 'Course Type',

		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'name' => array(
			'title' => 'Course Name',
		),
		'course_type' => array(
			'title' => 'Course Type',

		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title' => 'Course Name',
		),
		'course_type' => array(
			'title' => 'Course Type',

		),
	),

);
