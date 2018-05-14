<?php
/*
Template Name: Boutique
*/
?>


<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */
 if( is_user_logged_in() ) {

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>

<header class="">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	// do_action( 'woocommerce_archive_description' );
	?>
</header>
    <div class="main_wrap">

        <section class="section">

            <div id="test" class="section_img" style=" background-image: url(<?php echo get_theme_file_uri() . '/images/page_boutique/Livre_2.svg'?>) "></div>

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




<ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
            'product_cat' => 'ebook',
			'posts_per_page' => 12,
            'orderby' => 'date',
            // 'columns' => '1',
            'order' => 'desc'
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
            do_action( 'woocommerce_no_products_found' );
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!--/.products-->



<?php



/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );?>

        <div class="main_wrap_video">

        <section class="section">

            <div class="section_img_video" style=" background-image: url(<?php echo get_theme_file_uri() . '/images/page_boutique/Ecran.png'?>) "></div>

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

<div class="flex_ebook">

    <ul class="products">
    	<?php
    		$args = array(
    			'post_type' => 'product',
                'product_cat' => 'video',
    			'posts_per_page' => 12,
                'orderby' => 'date',
                // 'columns' => '1',
                'order' => 'desc'
    			);
    		$loop = new WP_Query( $args );
    		if ( $loop->have_posts() ) {
    			while ( $loop->have_posts() ) : $loop->the_post();
    				wc_get_template_part( 'content', 'product' );
    			endwhile;
    		} else {
                do_action( 'woocommerce_no_products_found' );
    			echo __( 'No products found' );
    		}
    		wp_reset_postdata();
    	?>
    </ul><!--/.products-->
</div>

<?php echo do_shortcode('[mc4wp_form id="469"]');?>

<?php } else {
    $page = get_page_by_title('connexion');
    wp_redirect( get_permalink($page));exit;
}?>

<?php get_footer( 'shop' );
