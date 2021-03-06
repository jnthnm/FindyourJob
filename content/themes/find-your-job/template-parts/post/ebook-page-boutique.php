<!--
//****************************************Partie Ebooks***************************************
-->
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
                    'posts_per_page' => '6',
                 // 'columns' => '2',
                    'product_cat' => 'ebook',
                    'orderby' => 'date',
                    'order' => 'desc');
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                        <div class="product col-sm col-sm-4">
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

        </div> <!--ebbok articles-->

        </div> <!--section-ebook-wrap-->
</div> <!--primary-->
        </div><!--wrap-->

    </div> <!--section ebook wrap-->
</div> <!--section left-->


    <aside class="section_ebook_right  col-sm col-sd-4">
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
