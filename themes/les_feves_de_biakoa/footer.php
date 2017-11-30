<?php wp_footer(); ?>

<footer class="footer">
    <div class="container">

        <div class="rowFlex">
<<<<<<< HEAD
            <div class="footer__logo">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </div>
            <div class="footer__contact">

                <?php
                // 'Sidebar Footer' = Sidebar name or id
                if ( is_active_sidebar( 'Footer widget' ) ) { ?>
                <ul id="sidebar">
                    <?php dynamic_sidebar( 'Footer widget' ); ?>
                </ul>
                <?php } ?>

                <h3>Contactez-nous !</h3>
                <p>Des questions, des projets, des remarques ? <br/> Contactez Sylvie par courriel : <a href="mailto:test@test.st">test@test.st</a></p>
=======
            <a href="" class="footer__logo">
                <?php

                    if ( function_exists( 'custom_logo_setup' ) ):
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                ?>

                    <img src="<?php echo $logo; ?>" alt="">

                <?php endif; ?>
            </a>
            <div class="footer__contact">

                <?php dynamic_sidebar( 'sidebar-footer' ); ?>

>>>>>>> dev-josselin
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
<<<<<<< HEAD

    <?php

    // CUSTOM MENU HEADER
    wp_nav_menu( array (
        'theme_location' => 'menu-footer',
        'container'      => 'div',
        'container_class'=> 'footer__links',
        'items_wrap'     => '<ul class="container">%3$s</ul>',
    ));

    ?>

=======
    <div class="footer__links">
        <?php

            wp_nav_menu( array (
                'theme_location' => 'menu-footer',
                'container'      => 'nav',
            ));

        ?>
    </div>
>>>>>>> dev-josselin
</footer>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGKIl64tL7_fsC0ZssSSgE3g_E1xb7qdY&callback=initMap"></script>


</body>
</html>

