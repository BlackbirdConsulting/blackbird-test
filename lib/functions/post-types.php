<?php
/**
 * Post Types
 *
 * This file registers any custom post types
 *
 * @package      Core_Functionality
 * @since        1.0.0
 * @link         https://github.com/billerickson/Core-Functionality
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

/**
 * Create Code Snippet post type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function bb_register_code_post_type(){
	$labels = array(
	  'name' => 'Code',
	  'singular_name' => 'Code Snippets',
	  'menu_name' => 'Code',
	  'add_new' => 'Add Code Snippet',
	  'add_new_item' => 'Add New Code Snippet',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Code Snippet',
	  'new_item' => 'New Code Snippet',
	  'view' => 'View Code Snippet',
	  'view_item' => 'View Code Snippet',
	  'search_items' => 'Search Code',
	  'not_found' => 'No Code Found',
	  'not_found_in_trash' => 'No Code Found in Trash',
	  'parent' => 'Parent Code Snippet',
	);
	
	$args = array(
	  'labels' => $labels,
	  'description' => 'Code Snippets',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'rewrite' => array('slug' => 'code'),
	  'query_var' => true,
	  'has_archive' => true,
	  'exclude_from_search' => false,
	  'supports' => array('title','editor','excerpt','trackbacks','custom-fields','revisions','thumbnail','author','page-attributes')
	  );
	  
	 register_post_type ('code', $args);
	 
}
add_action( 'init', 'bb_register_code_post_type' );

/**
 * Create Projects post type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function bb_register_projects_post_type(){
	$labels = array(
	  'name' => 'Projects',
	  'singular_name' => 'Project',
	  'menu_name' => 'Projects',
	  'add_new' => 'Add Project',
	  'add_new_item' => 'Add New Project',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Project',
	  'new_item' => 'New Project',
	  'view' => 'View Project',
	  'view_item' => 'View Project',
	  'search_items' => 'Search Projects',
	  'not_found' => 'No Project Found',
	  'not_found_in_trash' => 'No Project Found in Trash',
	  'parent' => 'Parent Project',
	);
	
	$args = array(
	  'labels' => $labels,
	  'description' => 'Blackbird Consulting Project Portfolio',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'capability_type' => 'post',
	  'hierarchical' => true,
	  'rewrite' => array('slug' => ''),
	  'query_var' => true,
	  'has_archive' => true,
	  'exclude_from_search' => false,
	  'supports' => array('title',/*'editor','excerpt','trackbacks','custom-fields','comments','revisions',*/'thumbnail','author','page-attributes')
	  );
	  
	 register_post_type ('project', $args);
	 
}
add_action ('init', 'bb_register_projects_post_type');

/**
 * Create Custom Options post type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function bb_register_options_post_type(){
	$labels = array(
	  'name' => 'Custom Options',
	  'singular_name' => 'Custom Option',
	  'menu_name' => 'Custom Options',
	  'add_new' => '',
	  'add_new_item' => '',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Custom Option',
	  'new_item' => '',
	  'view' => 'View Project',
	  'view_item' => 'View Project',
	  'search_items' => 'Search Custom Options',
	  'not_found' => 'No Custom Options Found',
	  'not_found_in_trash' => 'No Custom Options Found in Trash',
	  'parent' => 'Parent Project',
	);
	
	$args = array(
	  'labels' => $labels,
	  'description' => 'Blackbird Consulting Custom Theme Options',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'capability_type' => 'post',
	  'hierarchical' => true,
	  'rewrite' => array('slug' => ''),
	  'query_var' => true,
	  'has_archive' => true,
	  'exclude_from_search' => true,
          'publicly_queryable' => false,
	  'supports' => array('title','editor','excerpt',/*'trackbacks','custom-fields','comments','revisions','thumbnail','author',*/'page-attributes')
	  );
	  
	 register_post_type ('custom-options', $args);
	 
}
add_action ('init', 'bb_register_options_post_type');

/**
 * Create Dev Licences post type
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function bb_register_devlic_type(){
	$labels = array(
	  'name' => 'Dev Lic Plugins',
	  'singular_name' => 'Dev Lic Plugin',
	  'menu_name' => 'Dev Lic Plugins',
	  'add_new' => 'Add Dev Lic Plugin',
	  'add_new_item' => 'Add New Dev Lic Plugin',
	  'edit' => 'Edit Dev Lic Plugin',
	  'edit_item' => 'Edit Dev Lic Plugin',
	  'new_item' => 'New Dev Lic Plugin',
	  'view' => 'View Dev Lic Plugin',
	  'view_item' => 'View Dev Lic Plugin',
	  'search_items' => 'Search Dev Lic Plugins',
	  'not_found' => 'No Dev Lic Plugins Found',
	  'not_found_in_trash' => 'No Dev Lic Plugins Found in Trash',
	  'parent' => 'Parent Dev Lic Plugin',
	);
	
	$args = array(
	  'labels' => $labels,
	  'description' => 'Blackbird Consulting Development License Plugins',
	  'public' => true,
	  'show_ui' => true,
	  'show_in_menu' => true,
	  'capability_type' => 'post',
	  'hierarchical' => true,
	  'rewrite' => array('slug' => ''),
	  'query_var' => true,
	  'has_archive' => true,
	  'exclude_from_search' => false,
	  'supports' => array('title',/*'editor','excerpt','trackbacks','custom-fields','comments','revisions','author',*/'thumbnail','page-attributes')
	  );
	  
	 register_post_type ('devlic', $args);
	 
}
add_action ('init', 'bb_register_devlic_type');
