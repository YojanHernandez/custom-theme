<?php

function custom_theme_api_routes() {
    $endpoint = 'wp-custom-theme/v1';

    register_rest_route($endpoint, '/hubspot-form', [
        'methods' => 'POST',
        'callback' => 'wp_add_hubspot_form_data',
    ]);
}


add_action('rest_api_init', 'custom_theme_api_routes');