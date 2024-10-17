<?php get_header(); ?>

<div class="book-single">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div class="book-content">
                <?php the_content(); ?>
            </div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="book-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
        <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
