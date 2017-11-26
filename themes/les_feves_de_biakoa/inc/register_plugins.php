<?php

function theme_slug_widgets_init() {

    register_sidebar(array(
       'name'           => __( 'Sidebar Footer', get_template() ),
       'id'             => 'sidebar-footer',
       'description'    => __('Ce widget est dédié à l\'affichage du formulaire de contact dans le footer')
    ));
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );
