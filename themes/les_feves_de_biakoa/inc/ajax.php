<?php

add_action( 'wp_ajax_ajax_lirelasuite', 'post_function' );
add_action( 'wp_ajax_nopriv_ajax_lirelasuite', 'post_function' );

function post_function($postType) {

    global $wpdb, $_POST;


    $paged = $_POST['paged'];
    $args = array(
        'post_type' => $postType,
        'posts_per_page' => 3,
        'paged' => $paged
    );


    // The Query
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $GLOBALS['max_paged'] = $the_query->max_num_pages;
            get_template_part('templates/misc/article');
        }

        /* Restore original Post Data */
        wp_reset_postdata();

    } else {

        // no posts found

    }

}
