<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Custom_Theme
 */

/**
 * Enqueue scripts and styles.
 */
function custom_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 
        'custom-theme-style', 
        CUSTOM_THEME_URI . '/assets/css/style.css',   
        array(),  
        filemtime( CUSTOM_THEME_DIR . '/assets/css/style.css' )
    );

    // Enqueue custom JavaScript
    wp_enqueue_script( 
        'custom-theme-script', 
        CUSTOM_THEME_URI . '/assets/js/main.js', 
        array(), 
        filemtime( CUSTOM_THEME_DIR . '/assets/js/main.js' ), 
        true 
    );

    // Enqueue Bootstrap CSS
    wp_enqueue_style( 
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', 
        array(), 
        '5.3.8' 
    );

    // Enqueue Bootstrap JS
    wp_enqueue_script( 
        'bootstrap-js', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', 
        array(), 
        '5.3.8', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );