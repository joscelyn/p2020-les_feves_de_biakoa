<?php

// FOOTER
function theme_slug_widgets_init() {
    $args = array(
        'name' => __('Footer widget %s'),
        'id'   => 'sidebar-footer',
        'description' => 'Widget du footer.',
        'class' => '',

        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>' );

    register_sidebars(2, $args);
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );
