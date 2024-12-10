<?php
$site_logo = isset($setting_data['site_logo']) ? base_url(UPLOAD . $setting_data['site_logo']) : ASSETS_PATH . 'img/logo/logo.png';
$favicon = isset($setting_data['favicon']) ? base_url(UPLOAD . $setting_data['favicon']) : ASSETS_PATH . 'img/favicon.ico';
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/selena/selena/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 May 2023 10:14:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Selena - Organic eCommerce Bootstrap 5 Template</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?= $favicon; ?>" type="image/x-icon" />

    <!--=== All Plugins CSS ===-->
    <link href="<?= ASSETS_PATH ?>css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="<?= ASSETS_PATH ?>css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?= ASSETS_PATH ?>css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="<?= ASSETS_PATH ?>js/modernizr-2.8.3.min.js"></script>

    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area">
        <!-- header top start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?= $site_logo ?>" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header-settings-area">
                            <div class="header-top-left">
                                <nav>
                                    <ul class="d-flex justify-content-center">
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    my account
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="my-account.html">my account</a>
                                                    <a class="dropdown-item" href="<?= base_url('login'); ?>"> login</a>
                                                    <a class="dropdown-item" href="<?= base_url('login'); ?>">register</a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li>
                                            <div class="dropdown header-top-dropdown">
                                                <span>Language:</span>
                                                <a class="dropdown-toggle" id="language" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    English
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="language">
                                                    <a class="dropdown-item" href="#">English</a>
                                                    <a class="dropdown-item" href="#">Français</a>
                                                    <a class="dropdown-item" href="#">Germany</a>
                                                </div>
                                            </div>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-top-right">
                                <div class="header-search-box">
                                    <form>
                                        <input type="text" placeholder="Search Here">
                                        <button><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                                <div class="mini-cart-wrap">
                                    <button><i class="ion-bag"></i>
                                        <span class="notification">2</span>
                                    </button>
                                    <ul class="cart-list">
                                        <li>
                                            <div class="cart-img">
                                                <a href="product-details.html"><img src="<?= ASSETS_PATH ?>img/cart/cart-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <h4><a href="product-details.html">simple product</a></h4>
                                                <span class="cart-qty">Qty: 1</span>
                                                <span>$60.00</span>
                                            </div>
                                            <div class="del-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cart-img">
                                                <a href="product-details.html"><img src="<?= ASSETS_PATH ?>img/cart/cart-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <h4><a href="product-details.html">virtual product</a></h4>
                                                <span class="cart-qty">Qty: 2</span>
                                                <span>$100.00</span>
                                            </div>
                                            <div class="del-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </li>
                                        <li class="mini-cart-price">
                                            <span class="subtotal">subtotal : </span>
                                            <span class="subtotal-price ml-auto">$110.00</span>
                                        </li>
                                        <li class="checkout-btn">
                                            <a href="#">View Cart</a>
                                        </li>
                                        <li class="checkout-btn">
                                            <a href="#">checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- main menu start -->
        <div class="main-menu-area sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-menu">
                            <div class="sticky-logo">
                                <a href="index.html">
                                    <img src="<?= ASSETS_PATH ?>img/logo/logo_sticky.png" alt="brand logo">
                                </a>
                            </div>
                            <!-- main menu navbar start -->
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="<?= base_url(); ?>">Home </a></li>
                                    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title"><a href="#">column 01</a>
                                                <ul>
                                                    <li><a href="shop.html">shop grid left
                                                            sidebar</a></li>
                                                    <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                            sidebar</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title"><a href="#">column 02</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-details-affiliate.html">product
                                                            details
                                                            affiliate</a></li>
                                                    <li><a href="product-details-variable.html">product details
                                                            variable</a></li>
                                                    <li><a href="product-details-group.html">product details
                                                            group</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title"><a href="#">column 03</a>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title"><a href="#">column 04</a>
                                                <ul>
                                                    <li><a href="my-account.html">my-account</a></li>
                                                    <li><a href="login-register.html">login-register</a></li>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="contact-us.html">contact us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">shop grid left
                                                            sidebar</a></li>
                                                    <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                            sidebar</a></li>
                                                    <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                                    <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-list-left-sidebar.html">shop list left
                                                            sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop list right
                                                            sidebar</a></li>
                                                    <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-details-affiliate.html">product
                                                            details
                                                            affiliate</a></li>
                                                    <li><a href="product-details-variable.html">product details
                                                            variable</a></li>
                                                    <li><a href="product-details-group.html">product details
                                                            group</a></li>
                                                    <li><a href="product-details-box.html">product details box
                                                            slider</a></li>
                                                    <li><a href="product-details-sticky-left.html">product details
                                                            sticky left</a></li>
                                                    <li><a href="product-details-sticky-right.html">product details
                                                            sticky right</a></li>
                                                    <li><a href="product-details-vertical.html">product details
                                                            vertical slider</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog-right-sidebar-2-col.html">blog right sidebar 2 col</a></li>
                                            <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                            <li><a href="blog-list-full-width.html">blog list full width</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                            <li><a href="blog-details-audio.html">blog details audio</a></li>
                                            <li><a href="blog-details-video.html">blog details video</a></li>
                                            <li><a href="blog-details-image.html">blog details image</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- main menu navbar end -->
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu end -->

    </header>
    <!-- end Header Area -->