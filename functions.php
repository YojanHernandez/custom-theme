<?php
/**
 * Custom Theme functions and definitions
 *
 * @package Custom_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'CUSTOM_THEME_DIR', get_template_directory() );
define( 'CUSTOM_THEME_URI', get_template_directory_uri() );


// Setup.
require_once CUSTOM_THEME_DIR . '/inc/setup.php';

// Enqueue.
require_once CUSTOM_THEME_DIR . '/inc/enqueue.php';
