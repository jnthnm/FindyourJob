<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Find Your Job</title>
<?php wp_head(); /* Reviens à do_action('wp_head');*/ ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="navbar">
            <strong>    <a class="navbar-brand" href="">Find your job</a> </strong>
            </div> <!--navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> <!--navbar-toggle-->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav navbar_link">
                         <a class="nav-item nav-link" href="">    <?php get_template_part('template-parts/nav/nav-header'); ?></a>
                    <!-- <a class="nav-item nav-link" href="">Projets</a>
                        <a class="nav-item nav-link" href="">Générique</a>
                        <a class="nav-item nav-link" href="">Site web</a>
                        <a class="nav-item nav-link" href="#">Blog</a> -->
                    </div><!-- navbar-nav-->
                </div> <!--collapse-->
            </nav> <!--navbar-->
        </header>
