<?php get_header(); ?>

<div class="books-archive">
    <h1>Libros</h1>

    <?php if (have_posts()) : ?>
        <div class="books-list">
            <?php while (have_posts()) : the_post(); ?>
                <div class="book-item">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="book-thumbnail">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="book-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">Ver más</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No se encontraron libros.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
