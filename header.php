<?php
/**
 * header.php
 *
 * The header of the theme
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="https://versover.com/favicon.ico">
    <!--[if lt IE 9]><script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
    <?php wp_head(); ?>
</head>
<!-- header -->
<body <?php body_class( 'blog-home-page' ); ?>>
    <div class="header-wrapper header-wrapper-blog-home">
        <!-- ******HEADER****** -->
        <header id="header" class="header navbar-fixed-top">
            <div class="container">
                <h1 class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="highlight">V</span>ersover</a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-menu',
                        'menu_class'     => 'site-menu',
                    ) );
                    ?>
                </nav><!--//main-nav-->
            </div><!--//container-->
        </header><!--//header-->
        <section class="promo section">
            <div class="container text-center">
                <h2 class="title"><?php _e( 'Blog', 'versover' ); ?></h2>
                <p class="intro"><?php _e( 'Lorem ipsum dolor sit amet consectetuer adipiscing elit massa sociis natoque penatibus et magnis dis parturient montes', 'versover' ); ?></p>
            </div><!--//container-->
        </section><!--//promo-->
    </div><!--//header-wrapper-->