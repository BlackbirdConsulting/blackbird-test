# Blackbird Consulting WordPress Starter Child Theme
This is a WordPress starter child theme for use on new projects. It is set up to be updated via the [GitHub Updater](https://github.com/afragen/github-updater). It has all the proper header declarations for updating via the GitHub Updater. Fill in the blanks with your own project.

##GitHub Updater Header

The ```style.css``` header contains the proper declarations for using with GitHub Updater:

    /* # Blackbird WordPress Starter Child Theme  
    Theme Name: Blackbird WordPress Starter Child Theme [CHANGE THIS TO THE NAME OF YOUR CHILD THEME]
    Theme URI: https://herm71@bitbucket.org/herm71/blackbird-twentysixteen-child.git
    Description: Blackbird WordPress Starter Child Theme.
    Version: 0.0.0 [INCREMENT THIS TO TRIGGER GITHUB UPDATER]
    Author: Blackbird Consulting
    Author URI: http://www.blackbirdconsult.com/  
    Template: [ENTER PARENT TEMPLATE NAME]
    Template Version: [ENTER PARENT TEMPLATE NAME EG. 0.0.0]
    GitHub Theme URI: [ENTER URI OF GITHUB, BITBUCKET OR GITLAB THEME URI]
    GitHub Branch: master
    Tags: black, blue, gray, red, white, yellow, dark, light, one-column, two-columns, right-sidebar, fixed-layout, responsive-layout, accessibility-ready, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, microformats, post-formats, rtl-language-support, sticky-post, threaded-comments, translation-ready 
    Text Domain:  [enter parenttheme]-child
    License: GPL-2.0+  
    License URI: http://www.gnu.org/licenses/gpl-2.0.html  
    */
    
The ```style.css``` header contains all the proper declarations for both GitHub Updater and properly declaring a child theme. Declarations that require editing in order to make this theme fully comply with the standards are marked in brackets ```[]```.
 
##Theme Structure

###Core Functionality Library

The **Blackbird WordPress Starter Child Theme** includes a sub-directory called ```/lib/``` that serves as our theme's **core functionality library**. We place any theme customization files into the sub-folers of this directory, then include them via the theme-root's ```functions.php``` file. The **Blackbird WordPress Starter Child Theme Core Functionality Library** contans the following sub-directories:

- ```/css/```

- ```/functions/```

- ```/scripts/```

###Core Functionality Library Includes

The **Core Functionality Library** is included via the theme roots ```functions.php``` file with the following block of code:

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

    /** End Core Functionality Library */

###Add Your Own Library Entries

Use the **Core Functionality Library** to store any other custom includes you might add to your site, such as [FlexSlider](http://flexslider.woothemes.com/) or [Sidr](https://www.berriart.com/sidr/).

###Enqueueing Scripts

The ```/lib/functions/enqueue-scripts.php``` file is intended for enqueueing scripts to your theme. You should find a few examples that are commented out that you can use as a template to start from.

###Enqueue Parent Styles

As mentioned above,the ```/lib/functions/enqueue-scripts.php``` file is **included** in Child Theme root's ```functions.php``` file.

It is enqueued in the ```/lib/functions/enqueue-scripts.php``` file with the following code:

    // REGISTER STYLES 

    add_action('wp_enqueue_scripts', 'theme_styles');

    function theme_styles() { 
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'parent-style' );
	 
          
    }

If you enter the proper information in the header of the ```style.css``` file, the above code will automatically include the **Parent Theme's CSS** file.

#Changelog
Apple has a formalised version number structure based around the NumVersion struct, which specifies a one- or two-digit major version, a one-digit minor version, a one-digit "bug" (i.e. revision) version.

##0.0.0
- constructed repo with wp-content outside of primary wordpress directory
- wordpress and wp-sync-db added as submodules
