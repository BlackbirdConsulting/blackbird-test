<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



 // REGISTER STYLES 

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	  wp_enqueue_style( 'parent-style' );
	 
          wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700|Lato:400,300,400italic,700', false);
          
          wp_enqueue_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', false);
          
}


// ENQUEUE SCRIPTS & STYLES JAVASCRIPT
// 
// add_action('wp_enqueue_scripts', 'bb_scripts');

function bb_scripts() {
    //REGISTER AND ENQUEUE CUSTOM SCRIPTS

    // Back to top script
        wp_register_script( 'blackbird-back-to-top', get_stylesheet_directory_uri() . '/lib/scripts/blackbird-back-to-top-min.js', array('jquery'), false, true);
        wp_enqueue_script( 'blackbird-back-to-top' );
        
}
