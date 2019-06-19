<div class="main-menu-1 main-menu cu-menu">
    <div class="content max-width flex flex-justify-between flex-align-center p-x-40 ">
        <a class="logo main" href="<?php echo get_site_url(); ?>">
            <img class="a-l-c svg" src="<?=get_stylesheet_directory_uri(); ?>/media/images/p1-logo1.svg" alt="logo" />
        </a>
        <ul class="buttons v-a-m">
            <li>
                <a class="button1 menu-btn1 f-semi-bold" href="<?php echo get_site_url(); ?>">
                    <div>HOME<div class="line"></div>
                    </div>
                </a>
            </li>
            <li>
                <a class="button1 menu-btn1 f-semi-bold" href="<?php echo get_site_url(); ?>/about-mdsox/">
                    <div>ABOUT MDSOX<div class="line"></div>
                    </div>
                </a>
            </li>

            <li>
                <a class="button1 type5 f-semi-bold" href="<?php echo get_site_url(); ?>/shop/">
                    <div class="bg bg5 ease-cubicInOut transition-4ms"></div>
                    <div>SHOP NOW</div>
                </a>
            </li>
            <li>
                <a class="button1 menu-btn1 f-semi-bold" href="<?php echo get_site_url(); ?>/contact-us/">
                    <div>CONTACT US<div class="line"></div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="btn-menu a-r-c m-r-20 color7" onclick="byond.showMenuMobile(true, 1)">
            <img alt="" class="svg" src="<?=get_stylesheet_directory_uri(); ?>/media/images/icon-menu2.svg" />
        </div>
    </div>

    <div class="main-menu-dropdown cover-fixed bg5 color7 o-auto">
        <div class="flex flex-cover m-w">
            <div class="logo color7 a-l-t m-l-20 m-t-40">
                <img class="a-l-c m-l-20 svg" src="<?=get_stylesheet_directory_uri(); ?>/media/images/p1-logo1.svg"
                    alt="logo" />
            </div>
            <div class="c-a-1">
                <div class="c-a-2">
                    <div class="t-right flex flex-cover flex-column flex-justify-center p-r-60 p-t-50"
                        style="flex-wrap:nowrap">
                        <div class="buttons">
                            <div class="button button-alpha-25p t-60 f-extra-light l-h-normal transition animate"><a
                                    href="<?php echo get_site_url(); ?>">Home</a></div>
                            <div class="button button-alpha-25p t-60 f-extra-light l-h-normal transition animate"><a
                                    href="<?php echo get_site_url(); ?>/about-mdsox/"> About</a></div>
                            <div class="button button-alpha-25p t-60 f-extra-light l-h-normal transition animate"><a
                                    href="<?php echo get_site_url(); ?>/shop/"> Shop</a></div>
                            <div class="button button-alpha-25p t-60 f-extra-light l-h-normal transition animate"><a
                                    href="<?php echo get_site_url(); ?>/contact-us/">Contact Us</a></div>
                        </div>
                        <div class="social m-t-30">
                            <a class="button button-alpha-25p m-r-10 color2"><img alt="" class="icon svg"
                                    src="<?=get_stylesheet_directory_uri(); ?>/media/images/icon-facebook.svg" /></a>
                            <a class="button button-alpha-25p "><img alt="" class="icon svg"
                                    src="<?=get_stylesheet_directory_uri(); ?>/media/images/icon-twitter.svg" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-menu-close a-r-t m-r-20 m-t-20 color7 transition" onclick="byond.showMenuMobile(false, 1)">
                <img class="svg" alt="" src="<?=get_stylesheet_directory_uri(); ?>/media/images/icon-close.svg" />
            </div>
        </div>
    </div>
</div>