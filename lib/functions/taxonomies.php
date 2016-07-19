<?php
/**
 * Taxonomies
 *
 * This file registers any custom taxonomies
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Project Type Taxonomy
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */



function bb_register_type_taxonomy(){
	$labels = array(
		'singular_label' => 'Project Type',
		'label' => 'Project Type',
		'menu_name' => 'Project Type',
		'new_item_name' => 'New Project Type',
		'update_item' => 'Update Project Type',
		'edit_item' => 'Edit Project Type',
		'search_items' => 'Search Project Type',
		'all_items' => 'All Project Types'
	);

	register_taxonomy('project_type',array ('project'),
		array (
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => '')
			
		)
	);
}

add_action('init', 'bb_register_type_taxonomy');


/**
 * Create Code Tag Taxonomy
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */



function bb_register_code_tag(){
	$labels = array(
		'singular_label' => 'Code Tag',
		'label' => 'Code Tag',
		'menu_name' => 'Code Tag',
		'new_item_name' => 'New Code Tag',
		'update_item' => 'Update Code Tag',
		'edit_item' => 'Edit Project Tag',
		'search_items' => 'Search Code Tag',
		'all_items' => 'All Code Tags'
	);

	register_taxonomy('code_tag',array ('code'),
		array (
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => '')
			
		)
	);
}

add_action('init', 'bb_register_code_tag');
register_taxonomy_for_object_type( 'code_tag', 'code' );