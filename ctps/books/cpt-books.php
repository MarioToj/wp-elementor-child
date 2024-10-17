<?php

function create_books_cpt() {
    $labels = array(
        'name' => _x('Books', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Book', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Books', 'textdomain'),
        'name_admin_bar' => __('Book', 'textdomain'),
        'archives' => __('Book Archives', 'textdomain'),
        'attributes' => __('Book Attributes', 'textdomain'),
        'parent_item_colon' => __('Parent Book:', 'textdomain'),
        'all_items' => __('All Books', 'textdomain'),
        'add_new_item' => __('Add New Book', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'new_item' => __('New Book', 'textdomain'),
        'edit_item' => __('Edit Book', 'textdomain'),
        'update_item' => __('Update Book', 'textdomain'),
        'view_item' => __('View Book', 'textdomain'),
        'view_items' => __('View Books', 'textdomain'),
        'search_items' => __('Search Book', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    );

    $args = array(
        'label' => __('Book', 'textdomain'),
        'description' => __('Post Type Description', 'textdomain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    
    register_post_type('book', $args);
}

add_action('init', 'create_books_cpt', 0);
