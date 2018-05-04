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
<section class="section_ebook  row"

    <div class="section_ebook_left col-7">

        <!-- <div class="section_ebook_wrap"> -->
            <div class="wrap">
                <div id="primary" class="content-area wrap">
                    <header class="woocommerce-products-header woocommerce-products-header__title page-title">
                    <div class="section_ebook_intro">
                        <h2 class="section_ebook_title">Ebooks PDF achat en ligne uniquement</h2>
                        <p class="section_ebook_desc">Nos Ebooks sont téléchargeables 24h/24. Le format PDF est universel, il peut-être lu sur les ordinateurs,
                        tablettes et mobiles. <br>
                        Profitez-en dès maintenant …</p>
                    </div> <!-- section intro ebook-->

                    </header>
<div class="section_ebook_wrap">

<div class="section_ebook_article row">
        <?php
            $args = array(
            'post_type' => 'product',
            'posts_per_page' => '8',
         // 'columns' => '2',
            'product_cat' => 'ebook',
            'orderby' => 'date',
            'order' => 'desc');
            $loop = new WP_Query( $args );
            if ( $loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="product col-sm col-sm-3">
                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <?php woocommerce_show_product_sale_flash( $post, $product );
                            if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                            else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" width="150px" height="150px" />';

                            the_title( '<h4>', '</h4>' );
                            echo '<span class="price">',

                             $product->get_price_html() .'</span>';
                             echo '<br>';
                        ?>
                    </a>
                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                </div>
            <?php endwhile; endif;
            wp_reset_query();
        ?>

</div> <!--ebbok articles-->

</div> <!--section-ebook-wrap-->
</div> <!--primary-->


</div> <!--section ebook wrap-->


<aside class="section_ebook_right ">
<div class="section_ebook_wrap_input">

<label class="section_ebook_label" for="">Abonnez-vous</label>
    <div id="ebook_input" class="section_ebook_input">
        <input type="text" name="" value="" placeholder="Votre email">
    </div>
    <a class="btn btn-primary button_newsletter" href="#" role="button">Recevoir la newsletter</a>
</div><!-- section_ebook_wrap_input -->
<!-- <div class="section_ebook_img_aside"></div> -->

</aside>


</section>


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
                    <?php woocommerce_show_product_sale_flash( $post, $product );
                        if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                        else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />';

                        the_title( '<h4>', '</h4>' );
                        echo '<span class="price">',

                         $product->get_price_html() .'</span>';
                         echo '<br>';
                    ?>
                </a>
                <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
            </div>
        <?php endwhile; endif;
        wp_reset_query();
    ?>
    </div>


    </section>


<?php  } else {
    $page = get_page_by_title('connexion');
    wp_redirect( get_permalink($page));exit;

}?>

</main>
<?php get_footer();?>
