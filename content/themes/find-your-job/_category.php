<?php get_header();?>

    <main class="main_actu_only">

        <img class="img_header" src="images/office.jpeg" alt="">

        <div class="main_actu_only_flex">

            <section class="section_post_only">

            <!-- <?php  if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
            endwhile;
                endif;?> -->
                <?php
                  // Requete perso avec WP_Query et nos arguments spécifiques
                  $args_query_posts = [

                    // 'category_name' => 'entreprenariat',
                    // On souhaite afficher 6 résultats
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

                <div class="pagination pag_actu">
                  <a href="#">&laquo;</a>
                  <a href="#">1</a>
                  <a href="#" class="active">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">&raquo;</a>
                </div>

            </section>




<?php get_sidebar('SidebarPost'); ?>


</div>

<section class="section_footer_price">

    <img class="section_footer_img" src="images/book.svg" alt="">
    <!-- <div class="section_footer_img"></div> -->

    <div class="section_footer_wrap">
        <h4 class="section_footer_title">Vous souhaitez recevoir nos offres promo!</h4>
        <div class="section_footer_letter">

                <div class="section_footer_input">
                    <input type="text" name="" value="" placeholder="Votre adresse email">
                </div>
                <a class="btn button_offre" href="#" role="button">Recevoir nos offres</a>

        </div>
    </div>

</section>
</main>

<?php get_footer();?>
