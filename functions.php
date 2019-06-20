<?php




add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
wp_register_script( 'requires', get_stylesheet_directory_uri() . '/js/requires.js', array( 'jquery'), TRUE );
wp_register_script( 'magnific', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), TRUE);
wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js', array('jquery', 'requires'), TRUE );

wp_enqueue_script( 'requires' );
wp_enqueue_script( 'magnific' );
wp_enqueue_script( 'scripts' );
wp_enqueue_script( 'jquery' );



}
add_action( 'wp_footer', 'blankslate_footer_scripts' );
function blankslate_footer_scripts() {
?>

<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// function mytheme_add_woocommerce_support() {
// 	add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/* Adds TM Custom Options */

// function my_custom_function(){
//     do_action("woocommerce_tm_epo");
// }

// add_action( 'woocommerce_before_add_to_cart_button','my_custom_function');

/* Remove data tabs */

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );          // Remove the description tab
    unset( $tabs['reviews'] );          // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}

/* Remove sku on product page */

function sv_remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Disabled by default for several reasons but can be enabled like such
// function my_woo_product_slider() {
//     return true;
// }
// add_filter( 'wpex_woo_product_slider', 'my_woo_product_slider' );


add_action( 'get_header', 'bbloomer_remove_storefront_sidebar' );
 
function bbloomer_remove_storefront_sidebar() {
      remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
}


/**
 * Remove woocommerce sidebar
 */

add_action( 'wp', 'remove_sidebar' );
function remove_sidebar() {
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}

/**
 * Remove shop breadcrumbs
 */

add_action('template_redirect', 'remove_shop_breadcrumbs' );
function remove_shop_breadcrumbs(){
 
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
 
}

/**
 * Remove added to cart message
 */

function move_woocommerce_message(){
remove_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );
}
add_filter('wp', 'move_woocommerce_message');

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


/**
 * Add before and after cart markup
 */

 function before_cart() {
   include_once('cart-before.php');
 }

 function after_cart() {
   include_once('cart-after.php');
}

add_action( 'woocommerce_before_cart', 'before_cart' );

add_action( 'woocommerce_after_cart', 'after_cart' );

add_action( 'woocommerce_before_checkout_form', 'before_cart' );

add_action( 'woocommerce_after_checkout_form', 'after_cart' );


remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form' );

// add_action( 'woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form' );


/**
 * Hide the "In stock" message on product page.
 *
 * @param string $html
 * @param string $text
 * @param WC_Product $product
 * @return string
 */
function my_wc_hide_in_stock_message( $html, $text, $product ) {
	$availability = $product->get_availability();
	if ( isset( $availability['class'] ) && 'in-stock' === $availability['class'] ) {
		return '';
	}
	return $html;
}
add_filter( 'woocommerce_stock_html', 'my_wc_hide_in_stock_message', 10, 3 );

function disable_woo_commerce_sidebar() {
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10); 
}
add_action('init', 'disable_woo_commerce_sidebar'); 

add_action( 'woocommerce_before_add_to_cart_quantity', 'bbloomer_echo_qty_front_add_cart' );
 
function bbloomer_echo_qty_front_add_cart() {
 echo '<label class="qty">Quantity</label>'; 
}

remove_action( 'woocommerce_before_single_product', 'woocommerce_show_messages' );
add_action( 'woocommerce_after_single_product', 'woocommerce_show_messages', 15 );
remove_action( 'woocommerce_before_cart', 'woocommerce_show_messages' );


add_filter( 'wc_add_to_cart_message_html', '__return_false' );

add_filter( 'wc_add_to_cart_message', 'remove_add_to_cart_message' );

function remove_add_to_cart_message() {
    return;
}

function before_review() {
  echo '<div style="background: red !important;" >';
}

function after_review() {
  echo '</div>';
}


add_action( 'woocommerce_checkout_before_order_review', 'before_review' );

add_action( 'woocommerce_checkout_after_order_review', 'after_review' );