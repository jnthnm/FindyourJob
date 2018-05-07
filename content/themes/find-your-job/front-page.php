
<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>


<!--==========main==========-->
 <main>


   <!--==========API REST==========-->
   <?php
   define('BASEURL','http://localhost/Find-your-jOb/');
   define('JSONURL', 'wp-json/wp/v2/');

   $json = file_get_contents(BASEURL . JSONURL . 'posts');

   $json_decode = json_decode($json); // <<= function json_decode -> permet de décoder le json pour le transformer en tableau php.

  // header ('Content-type: application/json'); <<= je fais comprendre au nav que je souhaite afficher du json.
  echo '<pre>';
  var_dump($json_decode);

   ?>

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
