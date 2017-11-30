<?php wp_footer(); ?>
<footer class="footer">
    <div class="container">

        <div class="rowFlex">
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
                if ( is_active_sidebar( 'Sidebar Footer' ) ) { ?>
                    <?php dynamic_sidebar( 'Sidebar Footer' ); ?>
                <?php } ?>

<!--                <h3>Contactez-nous !</h3>-->
<!--                <p>Des questions, des projets, des remarques ? <br/> Contactez Sylvie par courriel : <a href="mailto:test@test.st">test@test.st</a></p>-->
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

    <?php

    // CUSTOM MENU HEADER
    wp_nav_menu( array (
        'theme_location' => 'menu-footer',
        'container'      => 'div',
        'container_class'=> 'footer__links',
        'items_wrap'     => '<ul class="container">%3$s</ul>',
    ));

    ?>

</footer>

<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGKIl64tL7_fsC0ZssSSgE3g_E1xb7qdY&callback=initMap"></script>-->


</body>
</html>

