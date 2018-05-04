<?php get_header();?>


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
                <a href="<?php echo the_content( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
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

<?php get_footer();?>
