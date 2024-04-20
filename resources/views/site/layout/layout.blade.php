<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title>Metronic Shop UI</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="{{ asset('site') }}/favicon.ico">

    <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="{{ asset('site') }}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{ asset('site') }}/assets/pages/css/animate.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{ asset('site') }}/assets/pages/css/components.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/pages/css/slider.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('site') }}/assets/corporate/css/style.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="{{ asset('site') }}/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="{{ asset('site') }}/assets/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
                <li class="color-red current color-default" data-style="red"></li>
                <li class="color-blue" data-style="blue"></li>
                <li class="color-green" data-style="green"></li>
                <li class="color-orange" data-style="orange"></li>
                <li class="color-gray" data-style="gray"></li>
                <li class="color-turquoise" data-style="turquoise"></li>
            </ul>
        </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">€</a>
                            <a href="javascript:void(0);">£</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper">
                                <div class="langs-block-others">
                                    <a href="javascript:void(0);">French</a>
                                    <a href="javascript:void(0);">Germany</a>
                                    <a href="javascript:void(0);">Turkish</a>
                                </div>
                            </div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{ asset('site') }}/shop-account.html">My Account</a></li>
                        <li><a href="{{ asset('site') }}/shop-wishlist.html">My Wishlist</a></li>
                        <li><a href="{{ asset('site') }}/shop-checkout.html">Checkout</a></li>
                        <li><a href="{{ asset('site') }}/page-login.html">Log In</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="{{ route('index') }}"><img
                    src="{{ asset('site') }}/assets/corporate/img/logos/logo-shop-red.png"
                    alt="Metronic Shop UI"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <!-- BEGIN CART -->
            <div class="top-cart-block">
                <div class="top-cart-info">
                    <a href="{{ route('cart.index') }}" class="top-cart-info-count">{{ Cart::instance('cart')->content()->count() }} items</a>
                    <a href="{{ route('cart.index') }}" class="top-cart-info-value">{{ Cart::instance('cart')->total() }}</a>
                </div>
                <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <!--END CART -->

            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation">
                <ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="">
                            man
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            kids
                        </a>
                    </li>
                    </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            shose
                        </a>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Pages
                        </a>

                        <ul class="dropdown-menu">
                            <li class="active"><a href="{{ asset('site') }}/shop-index.html">Home Default</a></li>
                            <li><a href="{{ asset('site') }}/shop-index-header-fix.html">Home Header Fixed</a></li>
                            <li><a href="{{ asset('site') }}/shop-index-light-footer.html">Home Light Footer</a></li>
                            <li><a href="{{ asset('site') }}/shop-product-list.html">Product List</a></li>
                            <li><a href="{{ asset('site') }}/shop-search-result.html">Search Result</a></li>
                            <li><a href="{{ asset('site') }}/shop-item.html">Product Page</a></li>
                            <li><a href="{{ asset('site') }}/shop-shopping-cart-null.html">Shopping Cart (Null
                                    Cart)</a></li>
                            <li><a href="{{ asset('site') }}/shop-shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="{{ asset('site') }}/shop-checkout.html">Checkout</a></li>
                            <li><a href="{{ asset('site') }}/shop-about.html">About</a></li>
                            <li><a href="{{ asset('site') }}/shop-contacts.html">Contacts</a></li>
                            <li><a href="{{ asset('site') }}/shop-account.html">My account</a></li>
                            <li><a href="{{ asset('site') }}/shop-wishlist.html">My Wish List</a></li>
                            <li><a href="{{ asset('site') }}/shop-goods-compare.html">Product Comparison</a></li>
                            <li><a href="{{ asset('site') }}/shop-standart-forms.html">Standart Forms</a></li>
                            <li><a href="{{ asset('site') }}/shop-faq.html">FAQ</a></li>
                            <li><a href="{{ asset('site') }}/shop-privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="{{ asset('site') }}/shop-terms-conditions-page.html">Terms &amp;
                                    Conditions</a></li>
                        </ul>
                    </li>




                    <!-- BEGIN TOP SEARCH -->
                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Search" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
    @yield('slider')
    <!-- END SLIDER -->

    @yield('index')



    <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
        <div class="container">
            <div class="row">
                <div class="col-md-4 steps-block-col">
                    <i class="fa fa-truck"></i>
                    <div>
                        <h2>Free shipping</h2>
                        <em>Express delivery withing 3 days</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 steps-block-col">
                    <i class="fa fa-gift"></i>
                    <div>
                        <h2>Daily Gifts</h2>
                        <em>3 Gifts daily for lucky customers</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-4 steps-block-col">
                    <i class="fa fa-phone"></i>
                    <div>
                        <h2>477 505 8877</h2>
                        <em>24/7 customer care available</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>About us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper
                        suscipit lobortis nisl aliquip commodo consequat. </p>
                    <p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN BOTTOM INFO BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Information</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Order Tracking</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Contact Us</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Careers</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Payment Methods</a></li>
                    </ul>
                </div>
                <!-- END INFO BLOCK -->

                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0">Latest Tweets</h2>
                    <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2"
                        data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961"
                        data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by
                        @keenthemes...</a>
                </div>
                <!-- END TWITTER BLOCK -->

                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Our Contacts</h2>
                    <address class="margin-bottom-40">
                        35, Lorem Lis Street, Park Ave<br>
                        California, US<br>
                        Phone: 300 323 3456<br>
                        Fax: 300 323 1456<br>
                        Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                        Skype: <a href="skype:metronic">metronic</a>
                    </address>
                </div>
                <!-- END BOTTOM CONTACTS -->
            </div>
            <hr>
            <div class="row">
                <!-- BEGIN SOCIAL ICONS -->
                <div class="col-md-6 col-sm-6">
                    <ul class="social-icons">
                        <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
                        <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                        <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                        <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                        <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
                        <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
                        <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
                        <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
                    </ul>
                </div>
                <!-- END SOCIAL ICONS -->
                <!-- BEGIN NEWLETTER -->
                <div class="col-md-6 col-sm-6">
                    <div class="pre-footer-subscribe-box pull-right">
                        <h2>Newsletter</h2>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" placeholder="youremail@mail.com" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END NEWLETTER -->
            </div>
        </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4 padding-top-10">
                    2015 © Keenthemes. ALL Rights Reserved.
                </div>
                <!-- END COPYRIGHT -->
                <!-- BEGIN PAYMENTS -->
                <div class="col-md-4 col-sm-4">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><img src="{{ asset('site') }}/assets/corporate/img/payments/western-union.jpg"
                                alt="We accept Western Union" title="We accept Western Union"></li>
                        <li><img src="{{ asset('site') }}/assets/corporate/img/payments/american-express.jpg"
                                alt="We accept American Express" title="We accept American Express"></li>
                        <li><img src="{{ asset('site') }}/assets/corporate/img/payments/MasterCard.jpg"
                                alt="We accept MasterCard" title="We accept MasterCard"></li>
                        <li><img src="{{ asset('site') }}/assets/corporate/img/payments/PayPal.jpg"
                                alt="We accept PayPal" title="We accept PayPal"></li>
                        <li><img src="{{ asset('site') }}/assets/corporate/img/payments/visa.jpg"
                                alt="We accept Visa" title="We accept Visa"></li>
                    </ul>
                </div>
                <!-- END PAYMENTS -->
                <!-- BEGIN POWERED -->
                <div class="col-md-4 col-sm-4 text-right">
                    <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                </div>
                <!-- END POWERED -->
            </div>
        </div>
    </div>
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
        <div class="product-page product-pop-up">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                    <div class="product-main-image">
                        <img src="{{ asset('site') }}/assets/pages/img/products/model7.jpg"
                            alt="Cool green dress with red bell" class="img-responsive">
                    </div>
                    <div class="product-other-images">
                        <a href="javascript:;" class="active"><img alt="Berry Lace Dress"
                                src="{{ asset('site') }}/assets/pages/img/products/model3.jpg"></a>
                        <a href="javascript:;"><img alt="Berry Lace Dress"
                                src="{{ asset('site') }}/assets/pages/img/products/model4.jpg"></a>
                        <a href="javascript:;"><img alt="Berry Lace Dress"
                                src="{{ asset('site') }}/assets/pages/img/products/model5.jpg"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                    <h2>Cool green dress with red bell</h2>
                    <div class="price-availability-block clearfix">
                        <div class="price">
                            <strong><span>$</span>47.00</strong>
                            <em>$<span>62.00</span></em>
                        </div>
                        <div class="availability">
                            Availability: <strong>In Stock</strong>
                        </div>
                    </div>
                    <div class="description">
                        <p>Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet
                            dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
                    </div>
                    <div class="product-page-options">
                        <div class="pull-left">
                            <label class="control-label">Size:</label>
                            <select class="form-control input-sm">
                                <option>L</option>
                                <option>M</option>
                                <option>XL</option>
                            </select>
                        </div>
                        <div class="pull-left">
                            <label class="control-label">Color:</label>
                            <select class="form-control input-sm">
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Black</option>
                            </select>
                        </div>
                    </div>
                    <div class="product-page-cart">
                        <div class="product-quantity">
                            <input id="product-quantity" type="text" value="1" readonly
                                name="product-quantity" class="form-control input-sm">
                        </div>
                        <button class="btn btn-primary" type="submit">Add to cart</button>
                        <a href="{{ asset('site') }}/shop-item.html" class="btn btn-default">More details</a>
                    </div>
                </div>

                <div class="sticker sticker-sale"></div>
            </div>
        </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{ asset('site') }}/assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('site') }}/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('site') }}/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{ asset('site') }}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('site') }}/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="{{ asset('site') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript">
    </script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('site') }}/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript">
    </script><!-- pop up -->
    <script src="{{ asset('site') }}/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='{{ asset('site') }}/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="{{ asset('site') }}/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript">
    </script><!-- Quantity -->

    <script src="{{ asset('site') }}/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="{{ asset('site') }}/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    @stack('scripts')
</body>
<!-- END BODY -->

</html>
