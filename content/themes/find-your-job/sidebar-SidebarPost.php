




<aside class="section_aside_post">
    <div class="section_aside_wrap">

        <h5 class="section_aside_title_top">A la une</h5>

<?php

$arguments_query_posts_sidebar = array(
  'posts_per_page' => 1,
  'post_type' => 'post',
  'category_name' => 'formation',
  // 'orderby' => 'rand'
);

$query_post_sidebar = new WP_Query($arguments_query_posts_sidebar);

if ($query_post_sidebar->have_posts()):
   while($query_post_sidebar->have_posts()):
      $query_post_sidebar->the_post();?>

                <img class="section_aside_img" src="<?php the_post_thumbnail_url('large'); ?>" alt="images">
                <h6 class="section_aside_title_bottom"><?php the_title(); ?></h6>
                <div class="section_aside_content">
                    <?php the_excerpt(); ?>

    <?php endwhile;

    wp_reset_postdata();

endif;
 ?>

</div>
<img class="section_aside_logo animated pulse" src="<?php echo get_theme_file_uri() . '/images/loupefind.svg'?>" alt="Logo">
</div>
<!-- animated jackInTheBox infinite -->
<div class="section_aside_button">

<?php
    $menuParameters = [
      'container'       => false,
      'echo'            => false,
      'depth'           => 0,
      'items_wrap'      => '%3$s',
      'theme_location'  => 'aside'
    ];

    $menu = wp_nav_menu($menuParameters);

    echo strip_tags($menu, '<a>');
?>

</div>

</aside>




<!-- <a class="btn btn_aside" href="#" role="button">Entreprenariat</a>
<a class="btn btn_aside" href="#" role="button">Formation</a>
<a class="btn btn_aside" href="#" role="button">Recrutement</a>
<a class="btn btn_aside" href="#" role="button">Retour à l'emploi</a>
<a class="btn btn_aside" href="#" role="button">Productivité</a>
<a class="btn btn_aside" href="#" role="button">Marché de l'emploi</a> -->













 <!-- get_template_part('template-parts/sidebar/sidebar_post'); -->
