<?php

add_role(
    'redacteur',
    'Rédacteur',
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

/*
function add_theme_caps() {
    
    // gets the redactor role
    $admins = get_role( 'redacteur' );
    
    // project
    $admins->add_cap( 'edit_project' );
    $admins->add_cap( 'edit_projects' );
    $admins->add_cap( 'edit_other_projects' );
    $admins->add_cap( 'publish_projects' );
    $admins->add_cap( 'read_project' );
    $admins->add_cap( 'read_private_project' );
    $admins->add_cap( 'delete_project' );
}

add_action( 'admin_init', 'add_theme_caps');
*/