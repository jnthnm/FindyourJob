<?php
function findjob_setup() {
  // RSS
  add_theme_support('automatic-feed-links');
  // Title automatique
  add_theme_support('title-tag');
  // Menus de navigation
  register_nav_menus([
    'primary' => 'Menu principal de navigation en haut à droite'
  ]);
  // Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'findjob_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
  // Les images de mise en avant
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'findjob_setup');
