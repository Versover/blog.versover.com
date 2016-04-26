<?php
/**
 * single.php
 *
 * The template for displaying the single post
 */
?>
<?php get_header(); ?>

<?php //@todo add breadcrumbs ?>

<div class="blog-post-wrapper container">
    <div class="row">
        <div class="blog-entry col-md-8 col-sm-8 col-xs-12">
            <article class="post">
                <?php while ( have_posts() ) : the_post() ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>

                    <?php comments_template(); ?>
                <?php endwhile; ?>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>
