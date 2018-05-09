<?php

function create_section_carousel($wp_customize, $panel_id) {

  // Déclaration d'une section dans notre Panel
  $wp_customize->add_section( 'fyj_slider', [
    'title'       => 'Carousel', // Titre de notre section
    'description' => 'Section regroupant les paramètres du Carousel', // Description de la section
    'panel'       => $panel_id
  ]);


//
// Activer / Desactivation de la partie Carousel
//
    $wp_customize->add_setting( 'fyj_slider_active', []);

    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control( 'fyj_slider_active', [
      'type'     => 'checkbox', // Je définit un type
      'section'  => 'fyj_slider', // Je l'ajoute à une section
      'label'    => 'Activer / Desactivation de la partie Carousel', // Label de mon setting
    ]);

//
// Intervale entre chaque slide
//
    $wp_customize->add_setting( 'fyj_slider_time', [

        'default' => '5000'
    ]);
    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control( 'fyj_slider_time', [
      'type'        => 'number', // Je définit un type
      'section'     => 'fyj_slider', // Je l'ajoute à une section
      'label'       => 'Interval between 2 slide (ms)', // Label de mon setting
      'input_attrs' => array( 'min' => 3000, 'max' => 7000, 'step'  => 500 ) // Valeurs minimale et maximale
    ]);

}
