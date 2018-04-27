
<?php
/*
Template Name: A-Propos
*/
?>
<?php get_header();?>




<main class="main_propos">

        <h2 class="uppercase_bold_us">Notre expertise:<br>Proposer une solution facile à utiliser et performante.</h2>
        <section class="section_propos">
        <div class="section_post_img" >
            <img class="cont_img" src="<?php echo get_theme_file_uri() . '/images/page-apropos/a-propos.jpg'?>" alt="image_container">
            <div class="section_post_wrap">


            <div class="section_propos_post">
                <div class="reflex">
                <h2   class="uppercase_white">Reflexion</h2>
                    <img class="reflex_img" src="<?php echo get_theme_file_uri() . '/images/page-apropos/reflexion.svg'?>" alt="">
                </div>
                <div class="reflex_text_right">
                <h2 class="uppercase_bold">Lorem Ipsum</h2>
                <p class="p_lo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
            </div>

            <div class="section_propos_post">
            <div class="formation_apropos_right">
                <h2 class="uppercase_white">Formation</h2>
                    <img class="forma_img" src="<?php echo get_theme_file_uri() . '/images/page-apropos/formation.svg'?>" alt="">
            </div>
            <div class="forma_text_left">
                <h2 class="uppercase_bold">Lorem Ipsum</h2>
                    <p class="p_lo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
            </div>

            <div class="section_propos_post">
            <div class="reflex_two">
                <h2 class="uppercase_white">Application</h2>
                    <img class="appli_img" src="<?php echo get_theme_file_uri() . '/images/page-apropos/application.svg'?>" alt="">
            </div>
            <div class="reflex_text_right_two">
                <h2 class="uppercase_bold">Lorem Ipsum</h2>
                    <p class="p_lo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
            </div>
            </div>
            </div>
    </section>

    <section class="team">
        <h2 class="uppercase_sousligne">La team</h2>
            <img class="team_svg" src="<?php echo get_theme_file_uri() . '/images/page-apropos/team.svg'?>" alt="">
        <div class="pres_one">
        <h3 class="titre">Audrey</h3>
        <p class="description">La chef des chefs de la dream team!</p>
    </div>
        <div class="pres_two">
        <h3 class="titre2">Audrey</h3>
        <p class="description">La chef des chefs de la dream team!</p>
        </div>
        <div class="pres_three">
        <h3 class="titre3">Audrey</h3>
        <p class="description">La chef des chefs de la dream team!</p>
    </div>

        <div class="pres_four">
        <h3 class="titre4">Audrey</h3>
        <p class="description">La chef des chefs de la dream team!</p>
    </div>
    </section>

    <div class="ligne_black">

    </div>
    <h2 class="uppercase_sousligne">Ils nous font confiance</h2>


    <section class="partenariat">

        <img src="/images/partenaire/pole-emploi.svg" height="30px" alt="pole emploi">
        <img src="/images/partenaire/logo-afpa.svg" alt="Afpa">
        <img src="/images/partenaire/loan-or-lease.svg" alt="loan or lease">
        <img src="/images/partenaire/cloud-9.svg" alt="cloud-9">
        <img src="/images/partenaire/oclock.svg" alt="oclock">

    </section>
</main>

<?php get_footer();?>
