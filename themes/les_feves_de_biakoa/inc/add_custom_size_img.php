<?php

add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'custom_logo', 280);
    add_image_size( 'small_icon', 60);
    add_image_size( 'section-img', 250, 400, false );
    add_image_size( 'member-img', 200, 200, false );
    add_image_size( 'icon', 200, 200, false );
}

// SUPPORT THUMBNAILS
add_theme_support('post-thumbnails');