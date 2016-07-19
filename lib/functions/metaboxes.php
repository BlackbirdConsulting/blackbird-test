<?php
/**
 * Create Metaboxes
 * @since 1.0.0
 * @link http://www.billerickson.net/wordpress-metaboxes/
 */

 add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	$meta_boxes[] = array(
		'id'         => 'subtitle_metabox',
		'title'      => 'Subtitle Metabox',
		'pages'      => array( 'page','rotator' ), // Post type
		'context'    => 'advanced',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Subtitle',
				'desc' => 'Enter Subtitle (optional)',
				'id'   => $prefix . 'subtitle',
				'type' => 'text',
			),
		),
	);

	// Add other metaboxes as needed
	// Rotator Options
	$meta_boxes[] = array(
    	'id' => 'rotator-options',
	    'title' => 'Rotator Options',
	    'pages' => array('rotator'), 
		'context' => 'normal',
		'priority' => 'low',
		'show_names' => true, 
		'fields' => array(
			array(
				'name' => 'Instructions',
				'desc' => 'In the right column upload a featured image. Make sure this image is at least 900x360px wide. Then fill out the information below.',
				'type' => 'title',
			),
			array(
		        'name' => 'Display Info',
		        'desc' => 'Show Title and Excerpt from above',
	    	    'id' => 'show_info',
	        	'type' => 'checkbox'
			),
			array(
				'name' => 'Clickthrough URL', 
	            'desc' => 'Where the Learn More button goes',
            	'id' => 'url',
            	'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}
	
 
/**
 * Initialize Metabox Class
 * @since 1.0.0
 * see /lib/metabox/example-functions.php for more information
 *
 */
  
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( CHILD_DIR . '/lib/metabox/init.php' );
	}
}
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
