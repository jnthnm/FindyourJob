<?
// Function Name: woocommerce_template_loop_product_thumbnail()
//
// do_action( 'woocommerce_before_shop_loop_item_title' );
//
//
// Function Name: woocommerce_template_loop_price()
//
// do_action( 'woocommerce_after_shop_loop_item_title' );
//
// Function Name: woocommerce_template_loop_add_to_cart()
//
// do_action( 'woocommerce_after_shop_loop_item' );


add_action('wp_enqueue_scripts', 'override_woo_frontend_styles');
function override_woo_frontend_styles(){
$pathWoo="/wp-content/plugins/woocommerce/";
wp_enqueue_style('woocommerce-general-custom', $pathWoo.'/assets/css/woocommerce.css');
wp_enqueue_style('woocommerce-layout-custom', $pathWoo.'/assets/css/woocommerce-layout.css');
wp_enqueue_style('woocommerce-smallscreen-custom', $pathWoo.'/assets/css/woocommerce-smallscreen.css','woocommerce-layout',WC_VERSION,'only screen and (max-width: ' . apply_filters( 'woocommerce_style_smallscreen_breakpoint', $breakpoint = '1440px' ).')',true);
}
