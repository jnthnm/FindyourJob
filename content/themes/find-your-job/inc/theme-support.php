<?php

if (!function_exists('fyj_setup')):


function fyj_setup(){
    add_theme_support('title-tag');
    //RSS
    add_theme_support('automatic-feed-links');
    //Titre automatique


    register_nav_menus([
        'header'        => 'Menu de navigation du header',
        'aside'         => 'Menu de navigation Pages aside',
        'profil'        => 'Menu navigation du profil',
        'connexion'     => 'Menu de connexion',
        'deconnexion'     => 'Menu de deconnexion'

    ]);
    // Les images de mise en avant
    add_theme_support('post-thumbnails');

}
endif;
add_action('after_setup_theme', 'fyj_setup');


function widgets() {

 register_sidebar( array(

 'name' => 'Zone de widget',
 'id' => 'new-widget-area',
 'before_widget' => '<div class="nwa-widget">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="nwa-title">',
 'after_title' => '</h2>',
 ) );
}

add_action( 'widgets_init', 'widgets' );
