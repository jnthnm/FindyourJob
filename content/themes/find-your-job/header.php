<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>
<body>


    <div class="wrapper">
        <!--==========header==========-->
        <header class="header">

            <?php get_template_part('template-parts/header/blue_bar_top'); // Barre bleu haut?>
            <?php get_template_part('template-parts/header/nav_hamb'); // Menu Hamburger?>
            <?php get_template_part('template-parts/header/blue_bar_bottom'); // Barre bleu et marron?>

        </header>
