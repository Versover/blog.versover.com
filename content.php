<?php
/**
 * content.php
 *
 * Default template for displaying content
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'item' ); ?>>
    <div class="row">
        <!-- Article header -->
        <?php if ( is_single() ) : ?>
            <h3><?php the_title(); ?></h3>
        <?php else : ?>
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        <?php endif; ?>
        <div class="clearfix"></div>
        <div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
            <?php
                // display the meta information
                versover_post_meta();
            ?><!--//meta-list-->
        </div><!--//meta-list-->
        <div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
            <?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
                <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
            <?php endif; ?>

            <div class="content">
                <div class="desc">
                    <?php
                    if ( is_search() ) {
                        the_excerpt();
                    } else {
                        the_content( __( 'Continue reading &rarr;', 'versover' ) );

                        wp_link_pages();
                    }
                    ?>
                </div><!--//desc-->
            </div><!--//content-->
        </div><!--//content-wrapper-->

        <!-- article footer -->
        <footer class="entry-footer">
            <?php
                // if we have a single page and the author bio exists, display it
                if ( is_single() && get_the_author_meta( 'description' ) ) {
                    echo '<h2>' . __( 'Written by ', 'versover' ) . get_the_author() . '</h2>';
                    echo '<p>' . the_author_meta( 'description' ) . '</p>';
                }
            ?>
        </footer> <!-- /article footer -->
    </div>
</article>
