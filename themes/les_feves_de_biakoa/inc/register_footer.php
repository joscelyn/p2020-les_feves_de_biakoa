<?php

// FOOTER
function theme_slug_widgets_init() {
    $args = array(
        'name' => __('Footer widget'),
        'id'   => '',
        'description' => 'Widget du footer.',
        'class' => '',

        'before_widget' => '<div class="footer__logo">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>' );

    register_sidebar( $args);
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );
