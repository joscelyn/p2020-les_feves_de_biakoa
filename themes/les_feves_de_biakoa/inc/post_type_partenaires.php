<?php // register_post_type( $post_type, $args );

function ajout_custom_type_init() {

    $post_type = "partenaire";
    $labels = array(
        'name' => 'Partenaires',
        'singular_name' => 'Partenaire',
        'all_items' => 'Tous les partenaires',
        'add_new' => 'Ajouter un partenaire',
        'add_new_item' => 'Ajouter un partenaire',
        'edit_item' => "Modifier un partenaire",
        'new_item' => 'Nouveau partenaire',
        'view_item' => "Voir le partenaire",
        'search_items' => 'Chercher un partenaire',
        'not_found' => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat dans la poubelle',
        'parent_item_colon' => 'Parent du partenaire :',
        'menu_name' => 'Partenaires',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => $post_type)
    );

    register_post_type($post_type, $args);
}
add_action( 'init', 'ajout_custom_type_init' );

