<?php

    // ADD PROJECTS POST TYPE

    function addCustomPostType()
    {

        $post_type = "project";

        $args = [
            'public'            => true,
            'label'             => 'Projets',
            'menu_position'     => 4,
            'menu_icon'         => 'dashicons-lightbulb',
            'hierarchical'      => false,
            'post_type'         => $post_type,
            'supports'          => [
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'trackbacks',
                'comments',
                'revisions',
                'page-attributes',
                'post-formats',
            ],
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'has_archive'           => true,
            'query_var'             => true,
            'can_export'            => true,
            'rewrite'               => ['slug' => $post_type],
        ];

        register_post_type('project', $args);
    }

    add_action('init', 'addCustomPostType');

    // ADD PROJECTS TAXONOMY

    $taxonomy = "projectcategory";
    $object_type = ["project"];
    $args = [
        "label"         => __("Type de projet"),
        "rewrite"       => ["slug" => "projects"],
        "hierarchical"  => true,
        "has_archive"   => false,
        'supports'      => ['title', 'thumbnail', 'editor', 'excerpt', 'revisions'],
    ];

    register_taxonomy($taxonomy, $object_type, $args);