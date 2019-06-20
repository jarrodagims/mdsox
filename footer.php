<!-- Cart -->
<a class="f-r-b m-r-20 cart-shop transition-6ms ease-cubicInOut flex-box-33p x-t-12 x-m-"
  href="<?php echo wc_get_cart_url(); ?>">
  <div class="flex-box-100p min-height-50 border-radius-5 bg-cart box-shadow10"
    style="display:flex;justify-content:center;align-items:center;height: 100%">

    <div class="flex-box-50p t-center content plex">
      Shopping Cart <span
        class="badge"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
    </div>

    <div class="flex-box-50p t-center content plex color7">
      Checkout with PayPal <img src="<?= get_stylesheet_directory_uri(); ?>/media/images/paypal-icon.png"
        class="vertical-align-middle" alt="" />
    </div>




  </div>
</a>
</div>
<!-- Cart -->
<div class="footer-fixed">
  <footer class="footer-1 bg1 p-y-80 p-x-20 cu-tweenmax" data-a-init="alpha:0"
    data-a-to="alpha:1, duration:0.9,ease:Cubic.easeOut">
    <div class="m-w-1600 wrap flex">
      <div class="column column1 ">
        <img src="<?=get_stylesheet_directory_uri(); ?>/media/images/p1-logo2.svg" alt="" />
        <div class="social m-t-20">
          <a class="button-style4 type2 color1">
            <img class="icon svg" src="<?=get_stylesheet_directory_uri(); ?>/media/images/icon-facebook.svg" alt="" />
          </a>
          <a class="button-style4 type2 color1">
            <img class="icon svg" src="<?=get_stylesheet_directory_uri(); ?>/media/images/icon-twitter.svg" alt="" />
          </a>
        </div>
      </div>
      <div class="column column2 flex flex-box-50p">
        <div>
          <div class="color5 f-extra-bold l-s-1 t-18">Navigation</div>
          <ul class="list list-no-style t-14  m-t-40">
            <li>
              <a class="button-style6 type2" href="<?php echo get_site_url(); ?>/">
                <div class="bg"></div>
                <span>Home</span>
              </a>
            </li>
            <li>
              <a class="button-style6 type2" href="<?php echo get_site_url(); ?>/about-mdsox/">
                <div class="bg"></div>
                <span>About MDSOX</span>
              </a>
            </li>
            <li>
              <a class="button-style6 type2" href="<?php echo get_site_url(); ?>/shop/">
                <div class="bg"></div>
                <span>Shop</span>
              </a>
            </li>
            <li>
              <a class="button-style6 type2" href="<?php echo get_site_url(); ?>/contact-us/">
                <div class="bg"></div>
                <span>Contact Us</span>
              </a>
            </li>
          </ul>
        </div>

        <div>
          <div class="color5 f-extra-bold l-s-1 t-18">Contact</div>
          <ul class="list list-no-style t-14  m-t-40">
            <li>6802 Commerce Ave Bldg 9, Suite C</li>
            <li>El Paso TX. 79915, United States</li>
            <li>[915]996.9060</li>
            <li>info@mdsox.com</li>
          </ul>
        </div>
      </div>
      <div class="column column3 flex flex-align-center flex-grow">
        <div>
          <div class="color5 f-extra-bold l-s-1 t-18">Providing MDSOX</div>
          <p class="t-14  m-t-40">
            If you are a clinic or store and you are interested in providing MDSOX to your patients or
            costumers you can contact us for a special price.
          </p>
        </div>
      </div>

      <div class="column column4 flex flex-align-center flex-grow flex-box-16p">
        <div class="chat-button v-a-m">
          <a href="shop.php">
            <div class="ball bg5-gradient box-shadow7">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="text f-extra-bold l-s-1">
              <div class="t-18">Take a look at our catalog</div>
              <div class="color5 f-regular t-16">Buy some socks!</div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </footer>
  <footer class="footer-2">
    <div class="flex flex-justify-between max-width">
      <div class="t-12">© 2019 <span class="f-bold">MDSOX</span> | <a href="privacy-policy.php">Privacy Policy</a>
      </div>

    </div>
  </footer>
</div>
<?php wp_footer(); ?>

<!-- JS -->

<script>
jQuery(function($) {

  $('.popup-youtube').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: "auto",
    closeBtnInside: false
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
      $('.cart-shop').addClass('show');
    }
  });
});
</script>
</body>

</html>