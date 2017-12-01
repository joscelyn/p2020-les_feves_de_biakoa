<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Les fèves de Biakoa</title>

    <?php wp_head(); ?>

    <link href="<?php echo THEME_STYLE ?>" rel="stylesheet">

</head>

<body class="<?php if( is_front_page() ): echo 'home'; else: echo $slug = basename(get_permalink()); endif;?>" <?php body_class(); ?>>

<div class="headerBackground">
    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail(); ?>" alt="<?php the_post_title(); ?>">
    <?php else: ?>
        <img src="<?= IMAGES_URL ?>/home.jpg" alt="<?php the_post_title(); ?>">
    <?php endif; ?>
</div>

<div class="content">
    <header class="mainHeader">
        <div class="container">

            <?php
            // CUSTOM LOGO
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }

            // CUSTOM MENU HEADER
            wp_nav_menu( array (
                'theme_location' => 'menu-header',
                'menu_id'        => 'primary-menu',
                'container'      => 'nav',
            ));
            ?>
        </div>
    </header>