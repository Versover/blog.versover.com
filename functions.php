<?php
/**
 * functions.php
 *
 * The theme's functions
 */

/**
 * 1. Constants
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMG', THEMEROOT . '/img' );
define( 'SCRIPTS', THEMEROOT . '/js' );

/**
 * 2. Set up the content width value based on theme's design
 */
if ( ! isset($content_width) ) {
    $content_width = 800;
}

/**
 * 3. Set up theme default and register various supported features
 */
if ( !function_exists( 'versover_setup' ) ) {
    function versover_setup() {
        // make the theme available for translation
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain( 'versover', $lang_dir );

        // add support for post formats
        add_theme_support( 'post-formats', array(
            'gallery',
            'link',
            'image',
            'quote',
            'video',
            'audio',
        ) );

        // add support for automatic feed links
        add_theme_support( 'automatic-feed-links' );

        // add support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        // register nav menus
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'versover' )
        ) );
    }

    add_action( 'after_setup_theme', 'versover_setup' );
}

/**
 * 4. Display a meta information for a specific post
 */
if ( ! function_exists( 'versover_post_meta' ) ) {
    function versover_post_meta( $inline = false ) {
        if ( !$inline ) {
            echo '<ul class="meta-list list-unstyled entry-meta">';

            if ( get_post_type() === 'post' ) {
                // if the post is sticky, mark it.
                if ( is_sticky() ) {
                    echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i>' . __( 'Sticky', 'versover' ) . '</li>';
                }

                // get the date
                printf(
                    '<li class="post-time post_date date updated meta-date">
                        <span class="date">%d</span>
                        <span class="month">%s</span>
                    </li>',
                    get_the_date( 'd' ),
                    get_the_date( 'M' )
                );

                // get the post author
                printf(
                    '<li class="meta-author post-author"><a href="%1$s" rel="author">%2$s</a></li>',
                    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                    get_the_author()
                );

                // the categories
                $category_list = get_the_category_list( ', ' );
                if ( $category_list ) {
                    echo '<li class="meta-categories">' . $category_list . '</li>';
                }

                // the tags
                $tag_list = get_the_tag_list( '', ', ' );
                if ( $tag_list ) {
                    echo '<li class="meta-tags">' . $tag_list . '</li>';
                }

                // comments link
                if ( comments_open() ) {
                    echo '<li class="post-comments-link">';
                    echo '<span class="meta-reply">';
                    comments_popup_link( __( 'Leave a comment', 'versover' ), __( 'One comment so far', 'versover' ), __( 'Comments: %', 'versover' ) );
                    echo '</span>';
                    echo '</li>';
                }

                // edit link
                if ( is_user_logged_in() ) {
                    echo '<li>';
                    edit_post_link( __( 'Edit', 'versover' ), '<span class="meta-edit">', '</span>' );
                    echo '</li>';
                }
            }

            echo '</ul>';
        } else {
            printf('<ul class="meta-list list-inline">
                        <li class="post-time post_date date updated"><i class="fa fa-calendar"></i>%s</li>',
                        the_date( 'd M, Y', '', '', false )
            );
            printf(
                '<li class="meta-author post-author"><a href="%1$s" rel="author">%2$s</a></li>',
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                get_the_author()
            );

            if ( comments_open() ) {
                echo '<li class="post-comments-link">';
                echo '<span class="meta-reply">';
                comments_popup_link( __( 'Leave a comment', 'versover' ), __( 'One comment so far', 'versover' ), __( 'Comments: %', 'versover' ) );
                echo '</span>';
                echo '</li>';
            }

            // edit link
            if ( is_user_logged_in() ) {
                echo '<li>';
                edit_post_link( __( 'Edit', 'versover' ), '<span class="meta-edit">', '</span>' );
                echo '</li>';
            }
        }
    }
}

/**
 * 5. Display pagination
 */
if ( ! function_exists( 'versover_paging_nav' ) ) {
    function versover_paging_nav() { ?>
        <ul>
            <?php if ( get_previous_posts_link() ) : ?>
                <li class="next">
                    <?php previous_posts_link( __( 'Newer Posts &rarr;', 'versover' ) ); ?>
                </li>
            <?php endif; ?>

            <?php if ( get_next_posts_link() ) : ?>
                <li class="previous">
                    <?php next_posts_link( __( '&larr; Newer Older', 'versover' ) ); ?>
                </li>
            <?php endif; ?>
        </ul> <?php
    }
}

/**
 * 6. Load the custom scripts for the theme
 */
if ( ! function_exists( 'versover_scripts' ) ) {
    function versover_scripts() {
        // adds support for pages with threaded comments
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        // register scripts
        wp_register_script( 'script', SCRIPTS . '/app.js', array(), false, true );

        // load the custom scripts
        wp_enqueue_script( 'script' );

        // load the stylesheets
        wp_enqueue_style( 'style', 'https://versover.com/css/app.css?v=2' );
    }

    add_action( 'wp_enqueue_scripts', 'versover_scripts' );
}
