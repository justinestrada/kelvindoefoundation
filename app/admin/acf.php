<?php

/**
 * ACF Local JSON
 */
add_filter('acf/settings/save_json', function ( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;   
});

/**
 * ACF Local JSON - Load Point
 */
add_filter('acf/settings/load_json', function ( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    // return
    return $paths;
});

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( [
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'kelvin-doe-foundation-settings',
    ]);
}
