
<?php get_header();?>





<main class="main_actu_only">
    <div class="main_actu_only_flex">


    <section class="section_post_only">
        <article class="section_post_only_wrap">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="section_post_only_title">
                <h2><?php the_title(); ?></h2>
            </div>

            <div class="section_post_only_infos">

                    <div class="post_author"><i class="fa fa-pencil" aria-hidden="true"></i><?php echo get_the_author(); ?> </div>
                    <div class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date() ?></div>
                    <!-- <div class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i>17 avril 2018</div> -->

            </div>
            <div class="section_post_only_article">
                <img class="section_post_only_img_only" src="<?php the_post_thumbnail_url(); ?>" alt="image_post">
                <div class="section_post_only_content">
                    <?php the_content(); ?>
                </div>


            </div>


        <?php endwhile; endif; ?>
            <!-- <div class="section_post_only_article">
                <div class="section_post_only_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <img class="section_post_only_img" src="images/ebook/pc1.jpg" alt="image_post">
                <div class="section_post_only_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <h3 class="section_post_only_title_content">Lorem ipsum : lorem ipsum</h3>

                    <div class="section_post_only_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <ol class="section_post_only_list">
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                    </ol>
                    <h4 class="section_post_only_title_content">Lorem ipsum : lorem ipsum</h4>
                    <div class="section_post_only_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

            </div> -->
        </article>

            <!-- <div class="pagination">
              <a href="#">&laquo;</a>
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">&raquo;</a>
            </div> -->
<!-- <?php get_template_part('template-parts/components/pagination'); // media ?> -->
        </section>

<?php get_sidebar('SidebarPost'); ?>
</div>

<section class="section_footer_price">

<img class="section_footer_img" src="<?php echo get_theme_file_uri() . '/images/book.svg'?>" alt="">
<!-- <div class="section_footer_img"></div> -->
<?php echo do_shortcode('[mc4wp_form id="469"]');?>
<!-- <div class="section_footer_wrap">
    <h4 class="section_footer_title">Vous souhaitez recevoir nos offres promo!</h4>
    <div class="section_footer_letter">

            <div class="section_footer_input">
                <input type="text" name="" value="" placeholder="Votre adresse email">
            </div>
            <a class="btn button_offre" href="#" role="button">Recevoir nos offres</a>

    </div>
</div> -->

</section>
</main>
<?php get_footer();?>
