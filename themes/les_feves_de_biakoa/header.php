<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Les fèves de Biakoa</title>

    <?php wp_head(); ?>
    <link href="<?php echo THEME_URL ?>/style.css" rel="stylesheet">
</head>

<body class="home" <?php body_class(); ?>>

<div class="headerBackground">
    <img src="<?php the_post_thumbnail(); ?>" alt="">
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
                'container'      => 'nav',
            ));
            ?>
        </div>
    </header>