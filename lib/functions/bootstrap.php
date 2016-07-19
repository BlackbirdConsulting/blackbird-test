<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
add_action('wp_enqueue_scripts', 'bb_enqueue_bootstrap');
function bb_enqueue_bootstrap(){
    //Latest compiled and minified CSS
    wp_register_style('bootstrap-minified','http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-minified');
    
    //Latest compiled JavaScript
    wp_register_script('bootstrap-script','http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap-script');
}

//add FontAwesome
function font_awesome(){
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">';
}

add_action('wp_head', 'font_awesome');
