<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>



<!--Content-->

<div class="bg12 contents p-b-5">

    <!--Title-->
    <section class="t-center p-t-125 p-b-60 p-x-20 cu-tweenmax bg5-gradient" data-a-init-child="alpha:0, y:200"
        data-a-stagger-child="alpha:1, y:0, ease:Cubic.easeOut, duration:0.6, delay:0.3, stagger:0.1"
        data-a-start="load">
        <h2 class="f-medium l-s-3 color13">MDSOX</h2>
        <h1 class="f-extra-light t-60 l-h-normal m-t-10 m-b-20 color7">MDSOX 20-30MMHG</h1>
        <p class="t-18 l-h-170 color14">
            Provides you with the optimum blood flow effect as<br>the compression improves circulation in your leg.
        </p>
    </section>
    <!--Title-->


    <!--Description-->
    <section class="content-16 type2 m-w flex flex-align-center p-x-20 p-b-60 p-t-60 cu-menu-anchor">
        <div class="column column1 image flex-grow p-r-60 t-right relative">

            <div class="product-img">

                <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

                    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

                    <div class="summary entry-summary">

                        <div class="column column2 content flex-grow p-l-60">
                            <div class="texts m-w-500 m-x-0 p-t-80">

                                <div class="column flex-box-100p m-t-10">

                                    <div class="f-medium">
                                        <div class="line1 bg5 cu-tweenmax" data-a-init="x:300, alpha:0, scaleX:1"
                                            data-a-to="x:300, alpha:0.5, scaleX:50, ease:Expo.easeIn, duration:0.6"
                                            data-a-to-2="x:0, alpha:1, scaleX:1, ease:Expo.easeOut, duration:1"
                                            style="left:-20px"></div>
                                        <h1 class="color4 l-s-3 cu-tweenmax" data-a-init="alpha:0"
                                            data-a-to="alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">SALE
                                        </h1>
                                    </div>
                                    <div class="cu-tweenmax" data-a-init="x:-50, alpha:0"
                                        data-a-to="x:0, alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">
                                        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
                </div>


                <?php do_action( 'woocommerce_after_single_product' ); ?>

            </div>

        </div>

    </section>
    <!--Description-->
    <!--Next-->

    <section class="content-20 m-w flex m-b-20 color7 p-x-20 cu-tweenmax" data-a-init="alpha:0"
        data-a-to="alpha:1, duration:0.8" data-a-gap="200">
        <a class="column column1  m-r-20 flex flex-align-center hover-3d prespective-2000 cu-tweenmax d-flex m-b-40"
            href="shop.php" style="width:250px;" data-cu-height="100%" data-a-init="alpha:0, x:-200"
            data-a-to="alpha:1, x:0, duration:0.6, ease:Cubic.easeOut" data-a-gap="200">
            <div class="cover bg transition bg5"></div>
            <div class="t-center" style="transform: translateZ(50px);">
                <img alt="" src="<?= get_stylesheet_directory_uri(); ?>/media/images/icon-grid.svg" />
                <div class="f-medium m-t-10 t-10 v-a-m">
                    <i class="fa fa-chevron-left m-r-10" aria-hidden="true"></i>
                    <span class="t-14">Back to Shop</span>
                </div>
            </div>
        </a>
        <a class="column column2 bg-cover p-x-60 flex-grow flex flex-align-center flex-justify-start cu-tweenmax d-flex m-b-40"
            href="shop-15-20socks.php"
            style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p4-about8.jpg)"
            data-a-init="alpha:0, x:200" data-a-to="alpha:1, x:0, duration:0.6, delay:0.1" data-a-gap="200">
            <div class="cover bg bg16 o-75 transition" style="transition:2s;"></div>
            <div class="content">
                <p class="f-medium t-20">Next item</p>

                <h4 class="f-medium m-t-5 m-b-20 l-s-5 t-10 v-a-m">
                    <span class="t-20 title f-extra-bold ">DRESS SOCKS</span>
                    <i class="fa fa-share m-l-5" aria-hidden="true"></i>
                </h4>
                <p class="o-50">MDSOX</p>
            </div>
        </a>
    </section>


    <!--Next-->


</div>

<!--Content-->

<!-- Cart -->
<a class="f-r-b m-r-20 cart-shop transition-6ms ease-cubicInOut flex-box-33p x-t-12 x-m-" href="checkout.php">
    <div class="flex-box-100p min-height-50 border-radius-5 bg-cart box-shadow10"
        style="display:flex;justify-content:center;align-items:center;height: 100%">

        <div class="flex-box-50p t-center content plex">
            Shopping Cart <span class="badge"><?= count($plenary[CartItems]) ?></span>
        </div>

        <div class="flex-box-50p t-center content plex color7">
            Checkout with PayPal <img src="<?= get_stylesheet_directory_uri(); ?>/media/images/paypal-icon.png"
                class="vertical-align-middle" alt="" />
        </div>


    </div>
</a>
</div>
<!-- Cart -->
<!--Footer--><?php get_footer(); ?>