<?php

//require get_theme_file_path('inc/customizer/section-call.php');
require get_theme_file_path('inc/customizer/section-carousel.php');
// // Je viens inclure mon fichier de customizer pour le footer
//require get_theme_file_path('inc/customizer/section-footer.php');
// // Je viens inclure mon fichier de customizer pour les posts
//require get_theme_file_path('inc/customizer/section-posts.php');
// // Je viens inclure mon fichier de customizer pour les posts
// require get_theme_file_path('inc/customizer/section-page.php');
// // Je déclare les changement de couleur
require get_theme_file_path('inc/customizer/section-color.php');


function fyj_customize_register($wp_customize) {
  // Ajout d'un panel au customizer
  $wp_customize->add_panel( 'fyj_theme_panel', [
    'title' => '&#9733; Find Your job! &#9733;', // Notre titre
    'description' => 'Panel de gestion pour le thème oProfile', // Description
    'priority' => 1, // Emplacement dans le menu
  ]);

  //create_section_call($wp_customize, 'fyj_theme_panel');
create_section_carousel($wp_customize, 'fyj_theme_panel');
// create_section_page($wp_customize, 'fyj_theme_panel');
create_section_color($wp_customize, 'fyj_theme_panel');
 // create_section_posts($wp_customize, 'fyj_theme_panel');
  //create_section_footer($wp_customize, 'fyj_theme_panel');

}
add_action('customize_register', 'fyj_customize_register');
