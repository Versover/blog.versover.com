<!-- footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-3 col-sm-4 links-col">
                    <div class="footer-col-inner">
                        <h3 class="sub-title"><?php _e( 'Quick Links', 'versover' ); ?></h3>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'menu_class'     => 'site-menu',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="footer-col col-md-3 col-sm-12 contact-col">
                    <div class="footer-col-inner">
                        <h3 class="sub-title"><?php _e( 'Get In Touch', 'versover' ); ?></h3>
                        <p class="intro"></p>
                        <div class="row">
                            <p class="phone-hide">
                                <span class="fs1" aria-hidden="true" data-icon="w"></span>
                                <a href="tel:+380675623777">0675623777</a>
                            </p>
                            <p>
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                <a href="mailto:versoverteam@gmail.com">versoverteam@gmail.com</a>
                            </p>
                            <p>
                                <span class="fs1" aria-hidden="true" data-icon=""></span>
                                <a href="skype:versover?chat">Versover</a>
                            </p>
                        </div>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
            </div>
        </div>
    </div><!--//footer-content-->
    <div class="bottom-bar">
        <div class="container center">
            <ul class="social-icons list-inline">
                <!-- social links -->
            </ul>

            <small class="copyright text-center">
                &copy; <a class="versover" href="<?php home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php the_date( 'Y' ); ?>
            </small>
        </div><!--//container-->
    </div><!--//bottom-bar-->
</footer><!--//footer-->

<?php wp_footer(); ?>
</body>
</html>
