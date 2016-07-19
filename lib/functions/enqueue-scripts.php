<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// DEREGISTER WORDPRESS JQUERY
// REGISTER GOOGLE JQUERY

//function bb_modify_jquery(){
//    if (!is_admin()){
// // deregister WordPress JQuery
//    wp_deregister_script('jquery');
//    //register and enqueue jquery
//    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js', null, true); // register the external file  
//        wp_enqueue_script('jquery'); // enqueue the external file
//}
//}

//add_action('init','bb_modify_jquery');
    

 // REGISTER STYLES
function theme_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	  wp_enqueue_style( 'parent-style' );
	 
          wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700|Lato:400,300,400italic,700', false);
          
          wp_enqueue_style( 'font-awesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', false);
          
}
add_action('wp_enqueue_scripts', 'theme_styles');

// ENQUEUE SCRIPTS & STYLES JAVASCRIPT
// add_action('wp_enqueue_scripts', 'bb_scripts');
function bb_scripts() {
    // FLEXSLIDER
    //register and enqueue flexslider style
        wp_register_style( 'flexslider-style', get_stylesheet_directory_uri() . '/lib/FlexSlider/flexslider.css');
        wp_enqueue_style( 'flexslider-style' );
    //register and enqueue FlexSlider script
        wp_register_script( 'flexslider-script', get_stylesheet_directory_uri() . '/lib/FlexSlider/jquery.flexslider-min.js', array('jquery'), false, true );
        wp_enqueue_script( 'flexslider-script');
    
   
   //REGISTER AND ENQUEUE CUSTOMIZATION SCRIPTS
        wp_register_script( 'flex-slider-home', get_stylesheet_directory_uri() . '/lib/FlexSlider/home-slider-min.js', array('jquery'), false, true);
        wp_enqueue_script( 'flex-slider-home' );
   //register and enqueue Customization Script
        wp_register_script( 'flex-slider-projects', get_stylesheet_directory_uri() . '/lib/FlexSlider/project-slider-min.js', array('jquery'), false, true);
        wp_enqueue_script( 'flex-slider-projects' );
    //SERVICES DROPDOWN MENU
     wp_register_script( 'services-dropdown', get_stylesheet_directory_uri() . '/lib/scripts/blackbird-services-dropdown-menu-script-min.js', array('jquery'), false, true);
        wp_enqueue_script( 'services-dropdown' );
    
    //SIDR - RESPONSIVE MENU
    // sidr Style Sheet
       wp_register_style( 'sidr-style', get_stylesheet_directory_uri() . '/lib/sidr/dist/stylesheets/jquery.sidr.dark.css');
        wp_enqueue_style( 'sidr-style' );
        
    // sidr plugin
       wp_register_script( 'sidr-script', get_stylesheet_directory_uri() . '/lib/sidr/dist/jquery.sidr-min.js', array('jquery'), false, true );
        wp_enqueue_script( 'sidr-script' );
    
    // sidr customization script
        wp_register_script( 'blackbird-menu-script', get_stylesheet_directory_uri() . '/lib/scripts/blackbird-menu-script-min.js', array('jquery'), false, true);
        wp_enqueue_script( 'blackbird-menu-script' );
    // Back to top script
        wp_register_script( 'blackbird-back-to-top', get_stylesheet_directory_uri() . '/lib/scripts/blackbird-back-to-top-min.js', array('jquery'), false, true);
        wp_enqueue_script( 'blackbird-back-to-top' );
        
}

/**
 * enqueue google tagging manager
 *
 * @author Jason Chafin
 * @uses  better newsletter jquery plugin
 *
 */
//add_action('genesis_before','bb_google_tag_manager', 9);

function bb_google_tag_manager()
{
    ?><!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KB27SZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KB27SZ');</script>
<!-- End Google Tag Manager --><?php;
}

/**
 * Add Google AdSense Page Level Ads
 *
 * @author Jason Chafin
 * @uses  Google
 *
 */
//add_action('wp_footer','bb_google_page_level');

function bb_google_page_level()
{
    ?><!-- Google Page Level Ads -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2160290213828829",
    enable_page_level_ads: true
  });
</script>
<!-- End Google Page Level Ads --><?php
}