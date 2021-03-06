<?php
/**
 * index.php
 *
 * The main template file
 */
?>

<?php get_header(); ?>

<section id="blog-list" class="blog-list section">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>

            <?php versover_paging_nav(); ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
