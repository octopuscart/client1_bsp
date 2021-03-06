<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta name="p:domain_verify" content="94b973ad564911b1f3016176fbe5c22e"/>-->
        <meta name="p:domain_verify" content="9c441577920ccb59aa33fe32889fa29c"/>
        <!-- Favicon -->
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/font-awesome.min.css">
        <!-- Flaticon CSS-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme2/css//font/flaticon.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/owl.theme.default.min.css">
        <!-- Main Menu CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/meanmenu.min.css">
        <!-- Nivo Slider CSS-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/select2.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/style.css">

        <!-- no slider CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/js/vendor/nouislider.min.css">

        <!--custom css style-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme2/css/custom_style.css">

        <!-- Modernizr Js -->
        <script src="<?php echo base_url(); ?>assets/theme2/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>assets/theme/js/vendors/modernizr.js"></script>

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        <script>var chatbot_id = 7449; !function(){var t, e, a = document, s = "smatbot-chatbot"; a.getElementById(s) || (t = a.createElement("script"), t.id = s, t.type = "text/javascript", t.src = "https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz", e = a.getElementsByTagName("script")[0], e.parentNode.insertBefore(t, e))}();</script><script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
    </head>


    <style>
        .preloadimage{
            background: black;
            top: 28%;
            position: absolute;
            height:100px; 

            margin-left: -90px;
        }
    </style>

    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    <!--    <div id="preloader">
            <center>
                <img class="preloadimage  " src="<?php echo base_url() . 'assets/theme2/img/preloader.gif' ?>" alt="logo" >
            </center>
        </div>-->
    <!-- Preloader End Here -->
    <body ng-app="App">
        <div class="wrapper-area" ng-controller="ShopController">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <!-- Add your site or application content here -->
            <!-- Header Area Start Here -->



            <script>


                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo site_url(); ?>";
                var imageurlg = "<?php echo imageserver; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;
                setInterval(function(){
                        $(".smat-footer").hide();
                }, 2000);
                setTimeout(function(){
                $(".smat-footer").hide();
                }, 2000);
            </script>

            <style>
                .ownmenu .dropdown.megamenu .dropdown-menu li:last-child{
                    margin-bottom: 20px;
                }

                .ownmenu .dropdown.megamenu .dropdown-menu li a{
                    line-height: 25px;
                }
                .account-wishlist ul li a {
                    font-size: 12px;
                }
            </style>



            <!-- Header Area Start Here -->
            <header>
                <input type="hidden" ng-model="showmodel" ng-init="showmodel = 0">
                <input type="hidden" ng-model="gitem_price" ng-init="showmodel = 0">

                <div class="header-top-inner-top" style="color: white;background: red;">
                    <div class="container">
                        <h2 style="margin: 0;">
                            <marquee>
                                Special Seasonal Offer 25% off on all products.
                            </marquee>
                        </h2>
                    </div>
                </div>

                <div class="header-area-style2" id="sticker">



                    <div class="header-top-inner-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="header-contact">
                                        <ul>
                                            <li><i class="fa fa-whatsapp" aria-hidden="true"></i><a href="https://api.whatsapp.com/send?phone=85267958894"> +(852) 6795 8894</a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@bespoketailorshk.com"> info@bespoketailorshk.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="account-wishlist">
                                        <ul>
                                            <li><a href="https://www.facebook.com/pg/bespoketailorshk"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="https://twitter.com/bespoketailorhk"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.instagram.com/bespoke_tailors_hong_kong/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.pinterest.com/jaybespoketailorshk/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCsvOrhYlTO4HTraZbHuIUdg?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a></li></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-top" style="  ">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <div class="account-wishlist" style="font-size: 12px;">
                                        <ul>
                                            <?php
                                            $session_data = $this->session->userdata('logged_in');
                                            if (isset($session_data['login_id'])) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url('Account/profile'); ?>">
                                                        <i class="fa fa-user"></i> <?php echo $session_data['first_name'] . ' ' . $session_data['last_name']; ?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url('Account/profile'); ?>">Profile</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo site_url('Account/logout'); ?>">   Logout</a>
                                                </li>
                                                <?php
                                            } else {
                                                ?>
                                                <li><a href="<?php echo site_url('Account/profile'); ?>">
                                                        <i class="fa fa-lock" aria-hidden="true"></i> Account</a>
                                                </li>
                                                <!--<li><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i>  Wishlist</a></li>-->


                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs">


                                    <?php
                                    $logoimg = "logo73.png";
                                    ?>

                                    <div class="logo-area">
                                        <a href="<?php echo site_url(); ?>"><img class="img-responsive" src="<?php echo base_url() . 'assets/images/' . $logoimg; ?>" alt="logo" style="    
                                                                                 position: absolute;
                                                                                 top: -22px;
                                                                                 height: 74px;
                                                                                 margin-left: -135px;"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <ul class="header-cart-area">
                                        <!--                                        <li class="header-search" id="remote">
                                                                                    <form id="top-search-form" action="<?php echo site_url('Product/ProductSearch'); ?>">                           
                                                                                        <input type="text" name="keyword" class="search-input typeahead" placeholder="Search...." required="">
                                                                                        <a href="#" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                                                        <button type="submit" style="height: 0px;width: 0px;opacity: 0;"></button>
                                                                                    </form>
                                                                                </li>-->


                                        <!--                                    <li class="header-search" >
                                                                                <form id="top-search-form" >                           
                                                                                        <input type="text" id="searchdata" class="search-input" placeholder="Search...." required="">
                                                                                        <a href="#" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                                                </form>
                                                                            </li>-->

                                        <li>
                                            <div class="cart-area">
                                                <a href="#"><i class="fa fa-shopping-cart"  aria-hidden="true"></i><span style="background: #f01211">{{globleCartData.total_quantity}}</span></a>
                                                <ul ng-if="globleCartData.total_quantity">
                                                    <li  ng-repeat="product in globleCartData.products">

                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <div class="product_image_back1" style="background: url({{product.file_name}});height: 80px;width: 80px;"></div>

                                                                    <!--<img class="img-responsive" alt="product" src="{{product.file_name}}">-->
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h2 style="    white-space: nowrap;
                                                                                overflow: hidden;
                                                                                text-overflow: ellipsis;
                                                                                width: 250px;"><a href="#" style="">{{product.title}} - {{product.item_name}}</a></h2>
                                                                            <h3>                                                                 
                                                                                <p>
                                                                                    {{product.quantity}} 
                                                                                </p>
                                                                            </h3>
                                                                        </li>
                                                                        <li>
                                                                        </li>
                                                                        <li>
                                                                            <p></p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#." ng-click="removeCart(product.product_id)"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <span><span>Sub Total</span></span><span>{{globleCartData.total_quantity}}</span>

                                                    </li>
                                                    <li>
                                                        <ul class="checkout">
                                                            <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                            <!--<li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>-->
                                                        </ul>
                                                    </li>
                                                </ul>




                                            </div>
                                        </li>
                                        <li>
                                            <div class="additional-menu-area" id="additional-menu-area">



                                                <div id="mySidenav" class="sidenav">
                                                    <a href="#" class="closebtn">×</a>
                                                    <div class="sidenav-search">
                                                        <div class="input-group stylish-input-group" >
                                                            <input type="text" placeholder="Search Here . . ." class="form-control">
                                                            <span class="input-group-addon">
                                                                <button type="submit">
                                                                    <span class="glyphicon glyphicon-search"></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <ul class="sidenav-login-registration">

                                                        <?php
                                                        $session_data = $this->session->userdata('logged_in');
                                                        if (isset($session_data['login_id'])) {
                                                            ?>
                                                            <li>
                                                                <a href="<?php echo site_url("Account/profile"); ?>" style="text-transform: capitalize">
                                                                    <i class="fa fa-user"></i> <?php echo $session_data['first_name'] . ' ' . $session_data['last_name']; ?>
                                                                    <span class="arrow"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo site_url("Account/logout"); ?>">Logout<span class="arrow"></span></a>
                                                            </li>

                                                            <?php
                                                        } else {
                                                            ?>
                                                            <li>
                                                                <a href="<?php echo site_url("Account/login"); ?>">Login<span class="arrow"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo site_url("Account/login"); ?>">Registration<span class="arrow"></span></a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                    <h3 class="ctg-name-title"><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Order Now</a></h3>
                                                    <ul class="sidenav-nav">
                                                        <li><a href="<?php echo site_url('Product/ProductList/1/0'); ?>">Shirts</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/2/0'); ?>">Suits</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/4/0'); ?>">Jackets</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/3/0'); ?>">Pants</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/5/0') ?>">Tuxedo</a></li>

                                                    </ul>
                                                    <!-- times-->
                                                </div>
                                                <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="logo-area" style="    margin-top: 2px;">
                                        <a href="<?php echo site_url(); ?>">
                                            <img class="img-responsive" src="<?php echo base_url() . 'assets/images/' . $logoimg; ?>" alt="logo" style="    height:35px;">
                                        </a>
                                    </div>
                                    <div class="main-menu-area home2-sticky-area">
                                        <nav>
                                            <ul>
                                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a>
                                                    <ul>
                                                        <li><a href="<?php echo site_url("Shop/faq"); ?>">FAQ'S</a></li>
                                                        <li><a href="<?php echo site_url("Shop/aboutus") ?>">About Us</a></li>
                                                    </ul>
                                                </li>
                                                <li ><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Order Now</a>
                                                    <ul>
                                                        <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirts</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suits</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jackets</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pants</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/5/0') ?>">Tuxedo</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo site_url("Shop/catalogue"); ?>">Catalogue</a></li>
                                                <li><a href="<?php echo site_url("Shop/appointment"); ?>">Appointment</a></li>

                                                <li><a href="<?php echo site_url("Shop/contactus") ?>">Contact Us</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="cart_header_stick">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i><span>{{globleCartData.total_quantity}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area Start Here -->
                        <div class="mobile-menu-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mobile-menu">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li class="active"><a href="#">Home</a>
                                                        <ul>
                                                            <li><a href="<?php echo site_url("Shop/faq"); ?>">FAQ'S</a></li>
                                                            <li><a href="<?php echo site_url("Shop/aboutus") ?>">About Us</a></li>
                                                        </ul>
                                                    </li>
                                                    <li ><a href="#">Order Now</a>
                                                        <ul>
                                                            <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirt</a></li>
                                                            <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suit</a></li>
                                                            <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jacket</a></li>
                                                            <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pant</a></li>

                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Catalogue</a></li>
                                                    <li><a href="#">Schedule</a></li>

                                                    <li><a href="<?php echo site_url("Shop/contactus") ?>">Contact Us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu Area End Here -->
                    </div>
                </div>
            </header>
            <div class="showonmobile" style="    color: white;
                 background: red;">
                <div class="container">
                    <h2 style="    margin: 0;">
                        <marquee>
                            Special Seasonal Offer 25% off on all products.
                        </marquee>
                    </h2>
                </div>
            </div>
            <!-- Header Area End Here -->




            <!--mobile model-->


            <!--search_open-->
            <div class="modal fade model_search" id="searchModel" tabindex="-1" role="dialog" aria-labelledby="searchModelLabel">
                <div class="modal-dialog" role="document" style="margin-top: 60px;">
                    <div class="modal-content mobile_model_search">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        </div>
                        <div class="modal-body">

                            <form id="top-search-form1" action="<?php echo site_url('Product/ProductSearch'); ?>">                           
                                <input type="text" name="keyword" class="search-input1 typeahead" placeholder="Search...." required="" style="width: 100%">
                                <button type="submit" style="height: 0px;width: 0px;opacity: 0;"></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="mobileModel" tabindex="-1" role="dialog" aria-labelledby="mobileModelLabel">
                <div class="modal-dialog" role="document" style="margin-top: 60px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="mobileModelLabel">Total: {{globleCartData.total_price|currency:" "}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="cart-area cart-area1">

                                <ul ng-if="globleCartData.total_quantity">
                                    <li  ng-repeat="product in globleCartData.products">

                                        <div class="cart-single-product">
                                            <div class="media">
                                                <div class="pull-left cart-product-img">
                                                    <a href="#">
                                                        <div class="product_image_back" style="background: url({{product.file_name}});height: 80px;width: 80px;    background-size: cover;"></div>

                                                                    <!--<img class="img-responsive" alt="product" src="{{product.file_name}}">-->
                                                    </a>
                                                </div>
                                                <div class="media-body cart-content">
                                                    <ul>
                                                        <li>
                                                            <h2 style="    white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                width: 250px;"><a href="#" style="">{{product.title}}-{{product.item_name}}</a></h2>
                                                            <h3>                                                                 
                                                                <p>
                                                                    {{product.price|currency:" "}} X {{product.quantity}} 
                                                                </p>
                                                            </h3>
                                                        </li>


                                                        <li>
                                                            <a class="trash" href="#." ng-click="removeCart(product.product_id)"><i class="fa fa-trash-o"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <ul class="checkout">
                                            <li><a href="<?php echo site_url("Cart/details"); ?>" class="btn-checkout1"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                            <li><a href="<?php echo site_url("Cart/checkoutInit"); ?>" class="btn-checkout1"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>




                            </div>
                        </div>
                        <!--                        <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>-->
                    </div>
                </div>
            </div>

