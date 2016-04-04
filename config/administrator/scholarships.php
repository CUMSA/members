<?php

/**
 * Actors model config
 */

return array(

	'title' => 'Scholarship',

	'single' => 'scholarship',

	'model' => 'App/Scholarship',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Name',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'name' => array(
			'title' => 'Course Name',
		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title' => 'Course Name',
		),
	),

);
