<?php
/**
 * single.php
 *
 * The template for displaying the single post
 */
?>
<?php get_header(); ?>

<?php //@todo add breadcrumbs ?>

<?php while ( have_posts() ) : the_post() ?>
    <?php get_template_part( 'content', get_post_format() ); ?>

    <?php comments_template(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
