<?php
function show_books_shortcode($atts) {
    // Atributos del shortcode
    $atts = shortcode_atts(array(
        'posts_per_page' => 10, // Cantidad de libros a mostrar por defecto
    ), $atts, 'show_books');

    // Consulta para obtener los libros
    $query = new WP_Query(array(
        'post_type' => 'book', // Tipo de post
        'posts_per_page' => $atts['posts_per_page'], // Número de posts a mostrar
    ));

    // Iniciar el almacenamiento en buffer para la salida
    ob_start();
    
    if ($query->have_posts()) {
        echo '<ul class="lista-libros">';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<li>';
            echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>'; // Título del libro
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); // Imagen destacada
            }
            echo '<div>' . get_the_excerpt() . '</div>'; // Extracto del libro
            echo '<a href="' . get_post_type_archive_link('book') . '">Ver todos los libros</a>'; // Enlace a la página de archivo
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No hay libros disponibles.</p>'; // Mensaje si no hay libros
    }

    // Restablecer los datos del post
    wp_reset_postdata();

    // Retornar la salida del buffer
    return ob_get_clean();
}

// Registrar el shortcode
add_shortcode('show_books', 'show_books_shortcode');
