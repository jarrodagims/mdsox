<?php get_header(); 
/*
		Template Name: Contact
*/
    
?>
<!--Content-->

<div class="bg12 contents">


    <!--Banner-->
    <section class="header-2 flex flex-align-center o-hidden p-x-20 bg-cover min-h-450  parallax-bg"
        data-cu-height="35%"
        style="background-image:url(<?= get_stylesheet_directory_uri(); ?>/media/images/contact.jpg); background-size:cover;">
        <div class="cover" style="background:rgba(0,0,0,0.4)"></div>
        <!-- content -->
        <div class="content color7 m-w flex flex-align-end flex-cover p-b-100">
            <div class="texts m-w-700 m-l-20 m-t-100">
                <div>
                    <div class="line1 bg1 m-l-5 cu-tweenmax" data-a-init="x:300, alpha:0, scaleX:1"
                        data-a-to="x:300, alpha:0.5, scaleX:50, ease:Expo.easeIn, duration:0.6"
                        data-a-to-2="x:0, alpha:1, scaleX:1, ease:Expo.easeOut, duration:1"></div>
                </div>
                <div class="cu-tweenmax" data-a-init="x:-50, alpha:0"
                    data-a-to="x:0, alpha:1, duration:0.9, delay:0.7, ease:Cubic.easeOut">
                    <h1 class="t-60 f-extra-light m-t-25 l-h-100">Let us know how we can <span
                            class="color5">help</span>.</h1>
                    <h2 class="t-18 m-t-30 l-h-170">Contact MDSOX by phone, fill out the form or social media. Our
                        customer service representatives can assist you with our products and services.</h2>
                </div>
            </div>
        </div>
        <!-- -->
    </section>
    <!--Banner-->


    <section class="content-18 flex m-w p-x-20 p-t-90 p-b-20 cu-tweenmax cu-menu-anchor" data-a-init="alpha:0, y:100"
        data-a-to="alpha:1, y:0, duration:0.7, ease:Cubic.easeOut" data-a-gap="200">
        <div class="column column1 p-r-60 flex-box-40p m-t-15">
            <h4 class="m-w-600 m-x-0 l-h-170">Fill out a product feedback form, browse our store locator or submit a
                question form.</h4>
            <div class="city m-t-40 m-b-40">
                <div class="t-18 f-bold">El Paso, TX</div>
                <div class="m-t-10 l-h-170">
                    6802 Commerce Ave Bldg 9, Suite C<br>
                    El Paso, TX 79915<br><br>
                    Ph. [915]996.9060<br>
                    Fax. [915]881.8854<br>
                    info@mdsox.com
                </div>
            </div>


        </div>

        <div class="column column2 flex-grow">

            <div id="contactform">
                <form name="theNewContact" onSubmit="return Validation(this)" language="JavaScript">
                    <div class="flex cu-tweenmax" data-a-init="alpha:0"
                        data-a-to="alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">
                        <div class="column flex-box-50p">
                            <label>Name</label>
                            <input name="name" class="required" />
                        </div>
                        <div class="column flex-box-50p">
                            <label>Email</label>
                            <input name="email" class="required email" />
                        </div>
                        <div class="column flex-box-100p m-t-10">
                            <label>Message</label>
                            <textarea name="comments" class="required"></textarea>
                        </div>
                        <div class="column flex-box-100p" style="text-align:center">

                            <!-- button-style1 type3 -->
                            <input type="submit" value="Send it" class="button-style11 color5">
                            <!-- -->
                        </div>

                        <div class="column flex-box-100p m-t-30" style="text-align:center">
                            <p id="alerta" style="color: #F00;">&nbsp;</p>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </section>


    <!--Map-->

    <section class="content-18 flex m-w p-t-90 cu-tweenmax">

        <div class="texts m-b-50">
            <div>
                <div class="line1 bg5 m-l-20- cu-tweenmax" data-a-init="x:300, alpha:0, scaleX:1"
                    data-a-to="x:300, alpha:0.5, scaleX:50, ease:Expo.easeIn, duration:0.6"
                    data-a-to-2="x:0, alpha:1, scaleX:1, ease:Expo.easeOut, duration:1"></div>
                <h4 class="color4 f-medium l-s-3 cu-tweenmax" data-a-init="alpha:0"
                    data-a-to="alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">Visit us</h4>
            </div>
            <div class="t-60 f-extra-light l-h-normal m-t-20 cu-tweenmax" data-a-init="alpha:0"
                data-a-to=" alpha:1, duration:0.9, delay:0.6, ease:Cubic.easeOut">We'd love to hear from you</div>
        </div>


        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.8390942665683!2d-106.39230848484311!3d31.77487428128621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75b012f516953%3A0x1836bc17e12a66b8!2s6802+Commerce+Ave%2C+El+Paso%2C+TX+79915%2C+EE.+UU.!5e0!3m2!1ses!2smx!4v1550270888101"
            class="m-w-100p" data-cu-height="30%" style="filter: grayscale(100%); width:100%; height:572px"
            frameborder="0" allowfullscreen></iframe>


    </section>
    <!--Map-->

</div>

<!--Content-->

<!--Footer-->

<?php get_footer(); ?>