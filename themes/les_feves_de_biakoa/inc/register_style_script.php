<?php

	add_action('wp_enqueue_scripts', 'ajout_scripts');

	function ajout_scripts() {

        // enregistrement d'un nouveau script

        // IF HOME charger tiny slider
        wp_register_script('tiny_slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.5/min/tiny-slider.js', array(), false, true);
        wp_enqueue_script('tiny_slider');

        wp_register_script('main_js', JS_URL . '/main.js', array('jquery'), false, true);
        wp_enqueue_script('main_js');

        // enregistrement des styles
        wp_register_style('google_font', 'https://fonts.googleapis.com/css?family=Palanquin:400,500,600,700|Palanquin+Dark:400,700');
        wp_enqueue_style('google_font');

        wp_register_style('tiny_slider_style', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.3.5/tiny-slider.css');
        wp_enqueue_style('tiny_slider_style');


        wp_register_style('style',  THEME_URL.'/style.css');
        wp_enqueue_style('style');

        $cdn = array(
            'foundation' => 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js',
        );
        // from here, do not touch
        // -------------------------------------------------
        $dependencies = array();
        foreach ($cdn as $name => $url) {
            wp_enqueue_script( $name, $url, array( 'jquery' ), null, true );
            $dependencies[] = $name;
        }

        // ajax
        wp_enqueue_script('ajaxScript', JS_URL. '/ajax.js', array('jquery'), false, true);
        wp_enqueue_script('ajaxScript');

        wp_localize_script( 'ajaxScript', 'ajaxurl', admin_url( 'admin-ajax.php' ) );

    }