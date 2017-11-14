<?php

    // ADD PROJECTS POST TYPE

    function addCustomPostType() {

        $args = array(
            'public' => true,
            'label'  => 'Projets',
            'menu_position'       => 4,
            'menu_icon'           => 'dashicons-lightbulb',
            'hierarchical'        => false,
            'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => array( 'slug' => $post_type )
            );

        register_post_type( 'project', $args );

    }

    add_action( 'init', 'addCustomPostType' );

    // ADD PROJECTS TAXONOMY

    $taxonomy = "projectcategory";
    $object_type = array("project");
    $args = array(
        "label"         => __( "Type de projet" ),
        "rewrite"       => array( "slug" => "Type de projet" ),
        "hierarchical"  => true,
        'supports' => array( 'title','thumbnail','editor', 'excerpt',  'revisions'),
    );

    register_taxonomy( $taxonomy, $object_type, $args );