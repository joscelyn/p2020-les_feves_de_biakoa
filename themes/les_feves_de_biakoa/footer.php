<?php wp_footer(); ?>

<footer class="footer">
    <div class="container">

        <div class="rowFlex">
            <a class="footer__logo">
                <?php

                    if ( function_exists( 'custom_logo_setup' ) ){
                        the_custom_logo();
                     } ?>
            </a>
            <div class="footer__contact">

                <?php dynamic_sidebar( 'sidebar-footer' ); ?>

            </div>
            <div class="footer__social">
                <h3>Suivez-nous !</h3>
                <ul class="footer__social__list">
                    <li>
                        <a href="<?php echo get_option('facebook');?>" target="_blank"><img src="<?php bloginfo( 'template_url'); ?>/dist/img/facebook.svg" alt="Facebook"></a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('twitter');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/dist/img/twitter.svg" alt="Twitter"></a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('instagram');?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/dist/img/instagram.svg" alt="Insta"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="footer__links">
        <?php

            wp_nav_menu( array (
                'theme_location' => 'menu-footer',
                'container'      => 'nav',
            ));

        ?>
    </div>
</footer>



</body>
</html>

