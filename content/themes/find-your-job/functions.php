<?php

require get_theme_file_path('inc/theme-support.php');

require get_theme_file_path('inc/theme-enqueue.php');

require get_theme_file_path('inc/theme-clean.php');

require get_theme_file_path('inc/customizer.php');

require get_theme_file_path('inc/woocommerce.php');


// Ou simplement les supprimer tous en une ligne
add_filter ('woocommerce_enqueue_styles', '__return_false');
