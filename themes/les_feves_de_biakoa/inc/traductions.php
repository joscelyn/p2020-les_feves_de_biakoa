<?php

    add_action( 'after_setup_theme', 'language_theme_support' );

    function language_theme_support()
    {

        load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );

    }