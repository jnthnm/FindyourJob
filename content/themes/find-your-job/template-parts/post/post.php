

            <article class="section_post_only_wrap">

                <div class="section_post_only_title">
                    <h2>Marché de l'emploi</h2>
                </div>

                <div class="section_post_only_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>

<?php


?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                    <!-- POSTS -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

function cat(){
    foreach((get_the_category()) as $category) {
        $test = $category->cat_name . ' ';
}
return $test;
}
  // Requete perso avec WP_Query et nos arguments spécifiques
  $args_query_posts = [


    // On souhaite afficher 6 résultats
    'category_name' => cat(),
    'posts_per_page' => 6
  ];

  $query_posts = new WP_Query($args_query_posts);

  if ($query_posts->have_posts()): while($query_posts->have_posts()): $query_posts->the_post();?>

                <div class="section_post_only_article post_wrap">

                    <div class="section_post_img">
                        <img class="section_post_only_img" src="<?php the_post_thumbnail_url('large'); ?>" alt="image_post">
                    </div>

                    <div class="section_post_content post_wrap_content">

                        <h3 class="section_post_only_title_content post_title"><?php the_title(); ?></h3>
                        <div class="section_post_only_content post_content">
                        <?php the_excerpt(); ?>
                        </div>
                        <a class="btn button_lls" href="<?php the_permalink(); ?>" role="button">Lire la suite</a>

                    </div>
                </div>
  <?php endwhile; endif;

  wp_reset_postdata();
?>
                <div class="back_blue"></div>



            </article>


<!-- <?php  var_dump(get_category_by_slug()); ?>
<?php  var_dump(get_category()); ?> -->
