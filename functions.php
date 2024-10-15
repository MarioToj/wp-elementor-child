<?php
function enqueue_custom_assets() {

    wp_enqueue_style('global-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0');

    if (is_front_page()) {
        wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/assets/css/home.css', array('global-style'), '1.0');
    } 

    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');