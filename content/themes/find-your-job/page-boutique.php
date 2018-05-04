<?php
/*
Template Name: Boutique
*/
?>

<?php get_header();?>


<?php
if( is_user_logged_in() ) { ?>


<main class="main" id="boutique">


    <div class="main_wrap">

        <section class="section">

            <div id="test" class="section_img"></div>

            <div class="section_title">
                <p class="section_title_nos"><span>N</span>os </p>
                <p class="section_title_book"> <span>E</span>books </p>
            </div>

            <div class="line_wrap_text">
                <p class="line_text">lorem ipsum</p> <br>
                <p class="line_text">lorem ipsum</p> <br>
                <p class="line_text">lorem ipsum</p>
                <div class="line_up"></div>
                <div class="line_down"></div>
            </div> <!--line-wrap-text-->

        </section>
    </div> <!-- main_wrap -->
<!---      EBOOK ---->

<?php   get_template_part('template-parts/post/ebook-page-boutique'); ?>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////////
//****************************************Partie Video***************************************
/////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div class="main_wrap_video">

        <section class="section">

            <div class="section_img_video"></div>

            <div class="section_title">
                <p class="section_title_nos"><span>N</span>os </p>
                <p class="section_title_book"> <span>V</span>idéos </p>
            </div>

            <div class="line_wrap_text">
                <p class="line_text">lorem ipsum</p> <br>
                <p class="line_text">lorem ipsum</p> <br>
                <p class="line_text">lorem ipsum</p>
                <div class="line_up"></div>
                <div class="line_down"></div>
            </div>

        </section>
    </div> <!-- main_wrap -->

<section class="section_video">
    <div class="section_video_article row">
    <?php
        $args = array(
        'post_type' => 'product',
        'posts_per_page' => '2',
     // 'columns' => '2',
        'product_cat' => 'video',
        'orderby' => 'date',
        'order' => 'desc');
        $loop = new WP_Query( $args );
        if ( $loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="product col-6">
                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                    <?php
                        woocommerce_show_product_sale_flash( $post, $product );
                        if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                        else echo '<img class="section_ebook_img" src="'.wc_placeholder_img_src().'" alt="Placeholder" width="150px" height="150px" />';

                        the_title( '<h4>', '</h4>' );
                        echo '<span class="price"> <br/> ';
                         $product->get_price_html() .'</span>';
                    ?>
                </a>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
            </div>
        <?php endwhile; endif;
        wp_reset_query();
    ?>
    </div>


    </section>
</main>

<?php  } else {
    $page = get_page_by_title('connexion');
    wp_redirect( get_permalink($page));exit;

}?>


<?php get_footer();?>
