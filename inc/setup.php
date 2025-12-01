<?php
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * @package Custom_Theme
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function custom_theme_setup() {
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup to output valid HTML5.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
