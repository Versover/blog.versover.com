<?php
/**
 * content.php
 *
 * Default template for displaying content
 */
?>

<?php if ( is_single() ) : ?>
    <div class="blog-post-wrapper container">
        <div class="row">
            <div class="blog-entry col-md-8 col-sm-8 col-xs-12">
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <div class="meta">
                        <?php versover_post_meta( $inline = true ); ?>
                    </div><!--meta-->
                    <div class="content">
                        <p class="post-figure">
                            <?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </p><!--//post-figure-->

                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
<?php else : ?>
    <section id="blog-list" class="blog-list section">
        <div class="container">
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'item' ); ?>>
                <div class="row">
                    <h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h3>
                    <div class="clearfix"></div>
                    <div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
                        <?php
                            // display the meta information
                            versover_post_meta();
                        ?>
                    </div><!--//meta-list-->
                    <div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
                        <?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
                            <figure class="entry-thumbnail figure">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </figure>
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
                    </div><!--//content-wrapper-->
                </div><!--//row-->
            </article><!--//item-->
        </div>
    </section>
<?php endif; ?>
