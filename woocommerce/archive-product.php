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
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

?>

<?php get_header(); ?>

<!--Content-->

<div class="bg12 contents p-b-5">

    <!--Banner-->

    <!--<section class="header-2 color7 h-100vh">
	<div class="cover bg-cover parallax-bg cu-tweenmax" style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p3-image1.jpg)"
		data-a-init="scale:2"    
		data-a-to="scale:1, ease:Expo.easeOut, duration:1.3, delay:0.3"
		data-a-start="load">
	</div>		
</section>-->

    <section class="header-2 grid-items-1 flex margin-top-20">
        <!-- item -->
        <div class="cover bg-cover parallax-bg item cu-tweenmax h-100vh relative" data-a-init="alpha:0"
            data-a-to="alpha:1, duration:0.8" data-a-gap="200"
            style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p3-image1.jpg)">


            <div style="display:flex;justify-content:center;align-items:center;width:100%; height: 100%">

                <div style="width:100%;" class="content plex">
                    <h2 class="t-28 f-bold color7 m-b-10">MDSOX 20-30 mmHg</h2>
                    <a href="shop-20-30socks.php" class="button-style1 type4 m-t-10">
                        <div class="arrow"><img alt="" class="svg"
                                src="<?= get_stylesheet_directory_uri(); ?>/media/images/arrow.svg" /></div>
                        <div class="bg-fx ease-expoOut"></div>
                        <div class="arrow2"><img alt="" class="svg"
                                src="<?= get_stylesheet_directory_uri(); ?>/media/images/arrow_complete.svg" /></div>
                        <span class="f-bold">SHOP NOW</span>
                    </a>
                </div>

            </div>

        </div>
        <!-- -->



        <!-- item -->
        <div class="cover bg-cover parallax-bg item cu-tweenmax h-100vh relative" data-a-init="alpha:0"
            data-a-to="alpha:1, duration:0.8" data-a-gap="200"
            style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p3-image-2.jpg)">

            <div style="display:flex;justify-content:center;align-items:center;width:100%; height: 100%">
                <div style="width:100%;" class="content plex">
                    <h2 class="t-28 f-bold color7 m-b-10">DRESS SOCKS 15-20 mmHg</h2>
                    <a href="shop-15-20socks.php" class="button-style1 type4 m-t-10">
                        <div class="arrow"><img alt="" class="svg"
                                src="<?= get_stylesheet_directory_uri(); ?>/media/images/arrow.svg" /></div>
                        <div class="bg-fx ease-expoOut"></div>
                        <div class="arrow2"><img alt="" class="svg"
                                src="<?= get_stylesheet_directory_uri(); ?>/media/images/arrow_complete.svg" /></div>
                        <span class="f-bold">SHOP NOW</span>
                    </a>
                </div>
            </div>

        </div>
        <!-- -->
        <!-- item -->
        <div class="cover bg-cover parallax-bg item cu-tweenmax h-100vh relative" data-a-init="alpha:0"
            data-a-to="alpha:1, duration:0.8" data-a-gap="200"
            style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p3-image-3.jpg)">

            <div style="display:flex;justify-content:center;align-items:center;width:100%; height: 100%">
                <div style="width:100%;" class="content plex">
                    <h2 class="t-28 f-bold color7 m-b-10">ANKLE COMPRESSION FOOT SLEEVE</h2>
                    <a href="shop-compression-foot-sleeves.php" class="button-style1 type4 m-t-10">
                        <div class="arrow"><img alt="" class="svg"
                                src="<?= get_stylesheet_directory_uri(); ?>/media/images/arrow.svg" /></div>
                        <div class="bg-fx ease-expoOut"></div>
                        <div class="arrow2"><img alt="" class="svg"
                                src="<?= get_stylesheet_directory_uri(); ?>/media/images/arrow_complete.svg" /></div>
                        <span class="f-bold">SHOP NOW</span>
                    </a>
                </div>
            </div>

        </div>
        <!-- -->
    </section>

    <!--Banner-->

    <!--Products-->


    <!--<section class="grid-items-9 p-x-20 p-t-100 p-b-100">

<div class="main-title m-b-40 m-w p-l-40 p-r-20">
<div class="t-left">
	<div>
		<div class="line1 m-l-20- bg5 cu-tweenmax"
			data-a-init="x:300, alpha:0, scaleX:1"
			data-a-to="x:300, alpha:0.5, scaleX:50, ease:Expo.easeIn, duration:0.6"
			data-a-to-2="x:0, alpha:1, scaleX:1, ease:Expo.easeOut, duration:1"
		></div>
		<h2 class="f-medium color4 cu-tweenmax l-s-3"
			data-a-init="alpha:0"
			data-a-to="alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut" 
		>OUR PRODUCTS</h2>
	</div>
	<h3 class="t-60 f-extra-light l-h-normal m-t-25 cu-tweenmax"
		data-a-init="alpha:0"
		data-a-to=" alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut" 
		>The most advanced<br><span class="f-extra-bold">compression technology</span></h3>
</div>
</div>

	
<div class="list max-width flex flex-3 cu-tweenmax"
	data-a-init-child="alpha:0, y:200"
	data-a-stagger-child="alpha:1, y:0, ease:Cubic.easeOut, duration:0.6, stagger:0.1"
	data-a-gap="200"
>
		<div class="item p-x-20 p-y-20" >
			<div class="data p-b-125p bg-cover" >
				<img alt="" class="cover" src="<?= get_stylesheet_directory_uri(); ?>/media/images/p-1.jpg" />
				<div class="more cover p-x-50 p-y-50" style="background:rgba(0,0,0,0.5)">
					<p class="desc color7 t-12 a-l-b m-b-40 m-l-40" ><span class="f-bold">MDSOX 20-30MMHG</span>
						<a href="shop-20-30socks.php"><span>View more</span></a>
					</p>
				</div>
			</div>
			<h3 class="title color5 f-bold m-t-50 t-18"><a href="shop-20-30socks.php">MDSOX 20-30MMHG</a></h3>
             <p class="description t14 m-t-20">Enjoy more energy and less soreness as the compression design allows the lactic acid that causes soreness to dissipate.</p>
			<a href="shop-20-30socks.php" class="color5 f-bold t-14"><span>View more</span></a>
		</div>

		<div class="item p-x-20 p-y-20" >
			<div class="data p-b-125p bg-cover" >
				<img alt="" class="cover" src="<?= get_stylesheet_directory_uri(); ?>/media/images/p-2.jpg" />
				<div class="more cover p-x-50 p-y-50" style="background:rgba(0,0,0,0.5)">
					<p class="desc color7 t-12 a-l-b m-b-40 m-l-40" ><span class="f-bold">DRESS SOCKS 15-20MMHG</span>
					<a href="shop-15-20socks.php"><span>View more</span></a>
					</p>
				</div>
			</div>
			<h3 class="title color5 f-bold m-t-50 t-18"><a href="shop-15-20socks.php">DRESS SOCKS 15-20MMHG</a></h3>
             <p class="description t14 m-t-20">Styled with modern chevron patterns, these socks are very comfortable and easy to put on making them ideal for everyday use.</p>
			<a href="shop-15-20socks.php" class="color5 f-bold t-14"><span>View more</span></a>
		</div>

		<div class="item p-x-20 p-y-20" >
			<div class="data p-b-125p bg-cover" >
				<img alt="" class="cover" src="<?= get_stylesheet_directory_uri(); ?>/media/images/p-3.jpg" />
				<div class="more cover p-x-50 p-y-50" style="background:rgba(0,0,0,0.5)">
					<p class="desc color7 t-12 a-l-b m-b-40 m-l-40" ><span class="f-bold">ANKLE COMPRESSION FOOT SLEEVE</span> 
					<a href="compression-foot-sleeves"><span>View more</span></a>
					</p>
				</div>
			</div>
			<h3 class="title color5 f-bold m-t-50 t-18"><a href="compression-foot-sleeves">ANKLE COMPRESSION FOOT SLEEVE</a></h3>
             <p class="description t14 m-t-20">You will feel lighter, stronger, faster and more confident from the very first time you slip on your MDSOX Ankle Sleeves.</p>
			<a href="compression-foot-sleeves" class="color5 f-bold t-14"><span>View more</span></a>
		</div>

	
</div>
</section>-->


    <!--Products-->


    <!--Logos-->

    <section class="content-7">
        <div class="cover bg cu-tweenmax bg5" data-a-init="x:400, alpha:0,"
            data-a-to="x:0, alpha:1, duration:0.7, ease:Cubic.easeOut" data-a-gap="200"></div>
        <div class="cu-tweenmax" data-a-init="alpha:0" data-a-to="alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">
            <h2 class="title font-xsmall f-semi-bold l-s-6">ADVANTAGES OF MDSOX</h2>
            <div class="icons flex flex-justify-start m-w-1200 p-t-20">
                <div class="icon bg-containt"
                    style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p-logo1.png)"></div>
                <div class="icon bg-containt"
                    style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p-logo2.png)"></div>
                <div class="icon bg-containt"
                    style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p-logo3.png)"></div>
                <div class="icon bg-containt"
                    style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p-logo4.png)"></div>
                <div class="icon bg-containt"
                    style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/p-logo5.png)"></div>
            </div>
        </div>
    </section>

    <!--Logos-->


    <!--About the product-->

    <section class="content-16 type2 m-w flex flex-align-center p-x-20 p-t-100 p-b-60 cu-menu-anchor">
        <div class="column column1 image flex-grow p-r-60 t-right">
            <img alt="" class="m-w-700 box-shadow6 cu-tweenmax"
                src="<?= get_stylesheet_directory_uri(); ?>/media/images/p4-about1.jpg" data-a-init='y:200, alpha:0'
                data-a-to='y:0, alpha:1, duration:0.8' data-a-gap="100" />
        </div>
        <div class="column column2 content flex-grow p-l-60">
            <div class="texts m-w-500 m-x-0 p-t-80">
                <div class="f-medium">
                    <div class="line1 bg5 cu-tweenmax" data-a-init="x:300, alpha:0, scaleX:1"
                        data-a-to="x:300, alpha:0.5, scaleX:50, ease:Expo.easeIn, duration:0.6"
                        data-a-to-2="x:0, alpha:1, scaleX:1, ease:Expo.easeOut, duration:1" style="left:-20px"></div>
                    <h1 class="color4 l-s-3 cu-tweenmax" data-a-init="alpha:0"
                        data-a-to="alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">ADVANCE COMPRESSION</h1>
                </div>
                <div class="cu-tweenmax" data-a-init="x:-50, alpha:0"
                    data-a-to="x:0, alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">
                    <h2 class="t-40 f-extra-light m-y-20 l-h-100"><span class="f-extra-bold">Designed</span> by vascular
                        therapists</h2>
                    <p class="t-18 l-h-170">MDSOX has been proven to greatly improve performance and stamina for
                        athletes as well as fight fatigue and cramps for anyone with a physically demanding job or
                        lifestyle. </p>
                    <div class="p-x-10">
                        <div class="flex p-t-60 m-b-60">
                            <div class="flex-box-10 t-26 color5" style="width:40px">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="flex-grow">
                                <h3 class="t-18 f-bold">MDSOX 20-30MMHG</h3>
                                <p class="m-t-10">This provides you with the optimum blood flow effect as the
                                    compression improves circulation in your leg.</p>
                            </div>
                        </div>
                        <div class="flex m-b-60">
                            <div class="flex-box-10 t-26 color5" style="width:40px">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="flex-grow">
                                <h3 class="t-18 f-bold">DRESS SOCKS 15-20MMHG</h3>
                                <p class="m-t-10">Allows adequate blood flow in your legs helping you to have less pain,
                                    swelling, fatigue, and preventing vein-related disease.</p>
                            </div>
                        </div>
                        <div class="flex m-b-60">
                            <div class="flex-box-10 t-26 color5" style="width:40px">
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                            <div class="flex-grow">
                                <h3 class="t-18 f-bold">ANKLE COMPRESSION FOOT SLEEVE</h3>
                                <p class="m-t-10">MDSOX Compression Foot Sleeve offer premium support with all the
                                    benefits of an ankle sleeve for fast relief from pain and inflammation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About the product-->


    <!--Testimonial-->

    <section class="content-13 type2 o-hidden m-t-40">
        <div class="flex max-width p-y-125 p-x-70">
            <div class="column texts cu-tweenmax m-w-1000 m-l-0" data-a-init="alpha:0, y:200"
                data-a-to="alpha:1, y:0, duration:0.8">
                <div class="text1 f-extra-light t-40 l-h-130">
                    <img alt="" class="svg quotation color5 t-50 a-l-t m-l-60-"
                        src="<?= get_stylesheet_directory_uri(); ?>/media/images/quotation-mark.svg" />
                    <h4>MDSOX have helped improve my blood-flow return and prevent inflammation in my legs. By
                        preventing inflammation you lower your risk of injury….I would recommend MDSOX to any athlete
                        who is looking for a product that provides this solution.</h4>
                </div>
                <p class="text2 t-18 m-t-30"><span class="f-bold color5">Dr. Armando Meza </span> | M.D.</p>
            </div>

        </div>
    </section>

    <!--Testimonial-->





    <!--Banner big-->


    <section class="content-12 bg-cover p-t-175 p-b-150 m-x-20 m-y-20  parallax-bg cu-tweenmax"
        style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/big-banner-3.jpg);"
        data-a-init="alpha:0," data-a-to="alpha:1, duration:0.7, ease:Cubic.easeOut" data-a-gap="200">
        <div class="columns flex flex-justify-start flex-align-center m-w-1000 p-x-20">
            <div class="column column1 cu-tweenmax" data-a-init="x:-50, alpha:0"
                data-a-to="x:0, alpha:1, duration:0.9, delay:0.7, ease:Cubic.easeOut" style="width:600px">
                <div class="line1 bg1 m-l-20- m-t-5- absolute a-l-t cu-tweenmax" data-a-init="x:300, alpha:0, scaleX:1"
                    data-a-to="x:300, alpha:0.5, scaleX:50, ease:Expo.easeIn, duration:0.6"
                    data-a-to-2="x:0, alpha:1, scaleX:1, ease:Expo.easeOut, duration:1"></div>
                <h4 class="t-72 f-extra-extra-light m-t-10 l-h-normal color7">
                    Improve <span class="f-extra-extra-bold">performance</span> and stamina
                </h4>
            </div>

        </div>
    </section>


    <!--Banner big-->















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
<!-- Cart -->

<!--Footer--><?php get_footer(); ?>