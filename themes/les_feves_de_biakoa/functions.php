<?php

	add_theme_support('post-thumbnails');



	register_nav_menus(array(
		'menu-1' => esc_html__('Principal', 'les_feves_de_biakoa'),
	));



	function reg_scripts() {
		wp_enqueue_style('app', get_stylesheet_uri());

	}
	add_action('wp_enqueue_scripts', 'reg_scripts');
