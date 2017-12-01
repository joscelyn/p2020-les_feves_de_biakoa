<?php

    register_nav_menus(array(
        'menu-header' => esc_html__('Menu principal header', 'les_feves_de_biakoa'),
        'menu-footer' => esc_html__('Menu secondaire footer', 'les_feves_de_biakoa'),
    ));

    function reg_scripts() {
        wp_enqueue_style('app', get_stylesheet_uri());
    }