<?php
/**
 * Backbird WordPress Starter Theme Functions and Declarations
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/** Core Functionality Library */
// Plugin Directory 
define( 'CHILD_DIR', dirname( __FILE__ ) );
 
// General Functions
//include_once( CHILD_DIR . '/lib/functions/general.php' );

// Post Types
//include_once( CHILD_DIR . '/lib/functions/post-types.php' );

// Taxonomies 
///include_once( CHILD_DIR . '/lib/functions/taxonomies.php' );

// Enqueue Scripts 
include_once( CHILD_DIR . '/lib/functions/enqueue-scripts.php' );

// Sidebars
//include_once( CHILD_DIR . '/lib/functions/sidebars.php' );

// Shortcodes
//include_once( CHILD_DIR . '/lib/functions/shortcodes.php' );

// WooCommerce Custom
//include_once( CHILD_DIR . '/lib/functions/woocustom.php' );

// Bootstrap
//include_once( CHILD_DIR . '/lib/functions/bootstrap.php' );

/** End Core Functionality Library */