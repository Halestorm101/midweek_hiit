<?php

// This functions file is meant only for the parent or main theme and should not be copied to a child theme.
// In order for this theme to be upgraded without losing customizations, do not modify this file or any of the files in this theme. All modifications should be made to the child theme.
// If you are manually creating a child theme, copy the functions-child.php file to your child theme and rename it to functions.php.


// Load functions-child.php if a child theme is not running.
if ( ! isset( $GLOBALS['builder_child_theme_loaded'] ) )
	require_once( dirname( __FILE__ ) . '/functions-child.php' );


// Set the iThemes official theme name. This is used for the updater system.
// If this is not an iThemes-provided theme or if you wish to disable updates, then you can remove this variable or set it to blank.
$GLOBALS['builder_theme_package_name'] = 'Builder-Everett';


// Load the Builder engine.
require_once( dirname( __FILE__ ) . '/lib/builder-core/init.php' );


// register google font
function builder_everett_register_fonts() {

    // load the Google font
    wp_register_style('Builder-Everett-Fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700,400italic,700italic|Droid+Serif:400,700,400italic,700italic);');
    wp_enqueue_style( 'Builder-Everett-Fonts');

}
add_action('wp_enqueue_scripts', 'builder_everett_register_fonts');