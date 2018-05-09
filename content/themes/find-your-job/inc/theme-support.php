<?php

if (!function_exists('fyj_setup')):


function fyj_setup(){
    add_theme_support('title-tag');
    //RSS
    add_theme_support('automatic-feed-links');
    //Titre automatique


    register_nav_menus([
        'header_log_in'     => 'Menu de navigation du header user connect',
        'heade_log_out'    => 'Menu de navigation du header user disconnect',
        'aside'             => 'Menu de navigation Pages aside',
        'profil'            => 'Menu navigation du profil',
        'connexion'         => 'Menu de connexion',
        'deconnexion'       => 'Menu de deconnexion',


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



 if (function_exists('register_sidebar')) {
            // Sidebar Area
            register_sidebar(array(
            	'name' => __('SidebarPost'),
            	'id' => 'sidebarPost',
            	'description' => __('Sidebar pour les posts'),
            ));

            // Sidebar Area
            register_sidebar(array(
            	'name' => __('SidebarPaie'),
            	'id' => 'sidebarPaie',
            	'description' => __('Sidebar pour vos pages'),
            ));


            // register_sidebar(array(
            // 	'name' => __('Sessad', 'turf'),
            // 	'id' => 'sessad-page',
            // 	'description' => __('Sidebar pour les pages Sessad', 'turf'),
            // ));
        }


//PAGINATION
