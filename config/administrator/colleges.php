<?php

/**
 * Actors model config
 */

return array(

	'title' => 'Colleges',

	'single' => 'college',

	'model' => 'App/College',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'College',
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
