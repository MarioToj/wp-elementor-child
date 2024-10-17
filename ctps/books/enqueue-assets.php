<?php

function enqueue_books_assets() {
    if (is_singular('book')) {
        // Encolar el CSS específico para el CPT Books
        wp_enqueue_style('books-style', get_stylesheet_directory_uri() . '/ctps/books/assets/books.css', array(), '1.0');
        
        // Encolar el JavaScript específico para el CPT Books
        wp_enqueue_script('books-script', get_stylesheet_directory_uri() . '/ctps/books/assets/books.js', array('jquery'), '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_books_assets');
