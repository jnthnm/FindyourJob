
<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

<!-- rest api == -->


<!--==========main==========-->
 <main>

<?php   get_template_part('template-parts/header/carousel'); // carousel

//<!--==========media==========-->

        get_template_part('template-parts/section/media'); // media

//<!--==========Concour==========-->


        get_template_part('template-parts/section/concour'); // concour

//<!--==========formules==========-->

        get_template_part('template-parts/section/formules'); // formules

//<!--==========Count==========-->

        get_template_part('template-parts/section/count'); // count?>


</main>


<?php get_footer();?>
