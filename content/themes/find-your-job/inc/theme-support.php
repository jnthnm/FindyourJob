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

        'logged-in'     => 'logged-in',
        'logged-out'     => 'logged-out',
        'connexion'     => 'Menu de connexion',
        'deconnexion'     => 'Menu de deconnexion',


    ]);
    // Les images de mise en avant
    add_theme_support('post-thumbnails');
}
endif;

add_action('after_setup_theme', 'fyj_setup');




function fyj_register_sidebars() {
    /*primary*/
    register_sidebar([
        'id' => 'primary',
        'name' => 'primary',
        'description' => 'main sidebar',
    ]);
}

add_action('widgets_init', 'fyj_register_sidebars');
