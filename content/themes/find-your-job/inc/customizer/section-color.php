<?php
function create_section_color($wp_customize, $panel_id) {

  // Déclaration d'une section dans notre Panel
  $wp_customize->add_section( 'oagency_color', [
    'title'       => 'Color', // Titre de notre section
    'description' => 'Section regroupant les paramètres de couleur du site', // Description de la section
    'panel'       => $panel_id
  ]);



///////////////////////////////////////////////////////////////////////////////////////
// Changement du fond du site
//////////////////////////////////////////////////////////////////////////////////////

    $wp_customize->add_setting( 'fyj_color_body', [
      'default' => '#ffffff'
    ]);

    // Je déclare pour mon setting ces caractèristiques (son control)
    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize,
        'body',
        [
          'label'      => 'Couleur de fond du site',
          'section'    => 'fyj_color',
          'settings'   => 'fyj_color_body',
        ]
      )
    );
}
