<?php
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'section-img', 250, 400, false ); //(cropped)
    add_image_size( 'member-img', 200, 200, false ); //(scaled)
    add_image_size( 'people-img', 360, 360, true ); //(cropped)
    add_image_size( 'people-featured-img', 150, 120, true ); //(cropped)
}