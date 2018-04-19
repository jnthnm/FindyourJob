<?php
// On ajoute ici ce qui sera executé dans les hooks WP_HEAD & WP_FOOTER
function findjob_scripts() {
  // Mon fichier de style css
  wp_enqueue_style(
    'findjob-css',
    get_theme_file_uri('/public/css/app.css'));
  // Mon fichier de vendor.css
    wp_enqueue_style(
      'findjob-vendor',
      get_theme_file_uri('/public/css/vendor.css'));
  // Je déclare mon app.js après vendor.js & dans le footer
  wp_enqueue_script(
    'findjob-app-js',
    get_theme_file_uri('/public/js/app.js'));

  // Je déclare mon vendor.js dans le footer
  wp_enqueue_script(
    'findjob-vendor-js',
    get_theme_file_uri('/public/js/vendor.js'),
    [],
    '1.0.0',
    true);
}
add_action('wp_enqueue_scripts', 'oagency_scripts');
