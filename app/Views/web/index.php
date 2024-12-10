    <!-- main wrapper start -->
    <main>
        <!-- hero slider area start -->
        <section class="hero-slider-area">
            <div class="hero-slider-active slider-arrow-style">
                <?php if(!empty($bannerData)){
                    foreach($bannerData as $banner){ ?>
                        <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-img">
                                            <img src="<?= base_url(BANNER.$banner['image']); ?>" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
                <!-- <div class="single-slider hero-bg hero-bg__1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content-inner">
                                    <div class="slider-content">
                                        <h1>Great offers<br>on fruits <br>and vegetables </h1>
                                        <p>We supply highly quality, premium organic products</p>
                                        <a href="shop.html" class="btn">shop now</a>
                                    </div>
                                    <div class="slider-img">
                                        <img src="<?= ASSETS_PATH ?>img/slider/slide_1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- hero slider area start -->

        <!-- service features start -->
        <section class="service-features pt-30">
            <div class="container">
                <div class="service-features-inner theme-color">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <i class="ion-paper-airplane"></i>
                        </div>
                        <div class="features-content">
                            <h5>Free Shipping</h5>
                            <p>Free delivery on all orders over $99</p>
                        </div>
                    </div>
                    <div class="single-features-item">
                        <div class="features-icon">
                            <i class="ion-social-usd"></i>
                        </div>
                        <div class="features-content">
                            <h5>Free Shipping</h5>
                            <p>Free delivery on all orders over $99</p>
                        </div>
                    </div>
                    <div class="single-features-item">
                        <div class="features-icon">
                            <i class="ion-help-buoy"></i>
                        </div>
                        <div class="features-content">
                            <h5>Free Shipping</h5>
                            <p>Free delivery on all orders over $99</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service features end -->

        <!-- popular category start -->
        <section class="popular-category bg-gray mt-minus pt-60 pb-60 pb-md-30 pb-sm-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center pt-62">
                            <h2>Popular Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if(!empty($categoryData)){
                        foreach($categoryData as $category){ ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="category-single-item mb-md-30 mb-sm-30">
                                    <div class="category-item-inner text-center" style="background-color: <?= $category['bg_color'] ?>;" >
                                        <div class="category-content">
                                            <h2><a href="product-details.html" style="color: <?= !empty($category['text_color'])?$category['text_color']:'#fff'; ?>;" ><?= $category['title'] ?></a></h2>
                                            <!-- <p>2 product</p> -->
                                        </div>
                                        <div class="category-thumb">
                                            <a href="product-details.html">
                                                <img src="<?= base_url(CATEGORY.$category['image']) ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end single item -->
                        <?php }
                    } ?>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="category-single-item mb-md-30 mb-sm-30">
                            <div class="category-item-inner color2 text-center">
                                <div class="category-content">
                                    <h2><a href="product-details.html">fruits</a></h2>
                                    <p>2 product</p>
                                </div>
                                <div class="category-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= ASSETS_PATH ?>img/category/cat-2.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="category-single-item mb-md-30 mb-sm-30">
                            <div class="category-item-inner color3 text-center">
                                <div class="category-content">
                                    <h2><a href="product-details.html">juice</a></h2>
                                    <p>2 product</p>
                                </div>
                                <div class="category-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= ASSETS_PATH ?>img/category/cat-3.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="category-single-item mb-md-30 mb-sm-30">
                            <div class="category-item-inner color4 text-center">
                                <div class="category-content">
                                    <h2><a href="product-details.html">meats</a></h2>
                                    <p>2 product</p>
                                </div>
                                <div class="category-thumb">
                                    <a href="product-details.html">
                                        <img src="<?= ASSETS_PATH ?>img/category/cat-4.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- popular category end -->

        <!-- product tab area start -->
        <section class="product-tab pt-60 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Our Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- product tab menu start -->
                        <div class="product-tab-menu pb-30">
                            <ul class="nav justify-content-center">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#tab_one">mango</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#tab_two">vegetables</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#tab_three">fruits</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#tab_four">juice</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#tab_five">meats</a>
                                </li>
                            </ul>
                        </div>
                        <!-- product tab menu end -->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab_one">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">organic food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum fruits</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen vegetables</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen posuere</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Dignissim venenatis</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del>$140.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Aliquam lobortis</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$80.00</span>
                                                        <span class="old-price"><del>$90.00</del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_two">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">organic food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-13.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen fruits</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-15.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen vegetables</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_three">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimen food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">organic food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum fruits</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum vegetables</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_four">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">organic food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum fruits</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum vegetables</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_five">
                                <div class="product-tab-wrapper">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-12.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">organic food</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-14.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum fruits</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="product-item mb-50">
                                                <div class="product-thumb">
                                                    <a href="product-details.html">
                                                        <img src="<?= ASSETS_PATH ?>img/product/product-16.jpg" alt="">
                                                    </a>
                                                    <div class="quick-view-link">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view">
                                                            <span data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="product-name">
                                                        <h4 class="h5">
                                                            <a href="product-details.html">Condimentum vegetables</a>
                                                        </h4>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="old-price"><del></del></span>
                                                    </div>
                                                    <div class="product-action-link">
                                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product tab area end -->

        <!-- choose us and testimonial area start -->
        <section class="bg-gray pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2>why choose us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="choose-us-wrapper">
                                    <div class="accordion" id="choose-us">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="ion-ribbon-b"></i>
                                                        100% fresh organic food
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    This is our motto and we are experts in delivering the best 100%
                                                    organic foods on the market. We work with more than 60 farms all
                                                    over the country. We’re a locally owned business with staff that
                                                    has decades of experience in the field of health and firm roots in
                                                    the health food industry
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                                                        <i class="ion-android-car"></i>
                                                        Fast Free Delivery
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    This is our motto and we are experts in delivering the best 100%
                                                    organic foods on the market. We work with more than 60 farms all
                                                    over the country. We’re a locally owned business with staff that
                                                    has decades of experience in the field of health and firm roots in
                                                    the health food industry
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="accordio-heading" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-controls="collapseThree">
                                                        <i class="ion-university"></i>
                                                        Rich Experience
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-bs-parent="#choose-us">
                                                <div class="card-body">
                                                    This is our motto and we are experts in delivering the best 100%
                                                    organic foods on the market. We work with more than 60 farms all
                                                    over the country. We’re a locally owned business with staff that
                                                    has decades of experience in the field of health and firm roots in
                                                    the health food industry
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 pt-md-60 pt-sm-60">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h2>What People Say</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-tab-menu">
                                        <ul class="nav">
                                            <li>
                                                <a data-bs-toggle="tab" href="#testimonial_one">
                                                    <img class="testimonial-thumb" src="<?= ASSETS_PATH ?>img/testimonial/team-member-1.jpg"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a class="active" data-bs-toggle="tab" href="#testimonial_two">
                                                    <img class="testimonial-thumb" src="<?= ASSETS_PATH ?>img/testimonial/team-member-2.jpg"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#testimonial_three">
                                                    <img class="testimonial-thumb" src="<?= ASSETS_PATH ?>img/testimonial/team-member-3.jpg"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-tab-wrapper">
                                        <div class="tab-content">
                                            <div class="tab-pane fade" id="testimonial_one">
                                                <div class="testimonial-content-inner">
                                                    <p>“ Great theme, excellent support. We had a few small issues with
                                                        getting the dropdown menus to work and support fixed them and
                                                        let us know which files were changed so that we could replicate
                                                        from dev to production. Very happy both with the theme and the
                                                        company. Highly recommended. ”</p>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="designation">
                                                        Uzzal Hossain / <span>developer of HT</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade active show" id="testimonial_two">
                                                <div class="testimonial-content-inner">
                                                    <p>“ Great theme, excellent support. We had a few small issues with
                                                        getting the dropdown menus to work and support fixed them and
                                                        let us know which files were changed so that we could replicate
                                                        from dev to production. Very happy both with the theme and the
                                                        company. Highly recommended. ”</p>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="designation">
                                                        Jenifer brown / <span>manager of HT</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="testimonial_three">
                                                <div class="testimonial-content-inner">
                                                    <p>“ Great theme, excellent support. We had a few small issues with
                                                        getting the dropdown menus to work and support fixed them and
                                                        let us know which files were changed so that we could replicate
                                                        from dev to production. Very happy both with the theme and the
                                                        company. Highly recommended. ”</p>
                                                    <div class="ratings">
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                        <span><i class="ion-android-star"></i></span>
                                                    </div>
                                                    <div class="designation">
                                                        erik jhonson / <span>designer of HT</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose us and testimonial area start -->

        <!-- best sellers area start -->
        <section class="best-sellers pt-60 pb-60 pb-lg-30 pb-md-30 pb-sm-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="best-sellers-banner">
                            <img src="<?= ASSETS_PATH ?>img/banner/best-sellers.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="best-sellers-content pt-md-60 pt-sm-60">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title section-title__2">
                                        <h2>best sellers</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="single-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="<?= ASSETS_PATH ?>img/product/product-1.jpg" alt="">
                                            </a>
                                            <div class="quick-view-link">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"> <span
                                                        data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <div class="tag-cate">
                                                <a href="product-details.html">fruits</a>
                                            </div>
                                            <div class="product-name">
                                                <h4 class="h5">
                                                    <a href="product-details.html">Condimentum food</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$160.00</span>
                                                <span class="old-price"><del>$180.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="<?= ASSETS_PATH ?>img/product/product-2.jpg" alt="">
                                            </a>
                                            <div class="quick-view-link">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"> <span
                                                        data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <div class="tag-cate">
                                                <a href="product-details.html">fruits</a>
                                            </div>
                                            <div class="product-name">
                                                <h4 class="h5">
                                                    <a href="product-details.html">Tincidunt malesuada</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$130.00</span>
                                                <span class="old-price"><del>$140.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item mb-30">
                                        <div class="product-thumb">
                                            <a href="product-details.html">
                                                <img src="<?= ASSETS_PATH ?>img/product/product-3.jpg" alt="">
                                            </a>
                                            <div class="quick-view-link">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"> <span
                                                        data-bs-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <div class="tag-cate">
                                                <a href="product-details.html">fruits</a>
                                            </div>
                                            <div class="product-name">
                                                <h4 class="h5">
                                                    <a href="product-details.html">100% organic food</a>
                                                </h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$99.00</span>
                                                <span class="old-price"><del></del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- best sellers area end -->

        <!-- banner statistic area start -->
        <div class="banner-statistics">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-container mb-sm-30">
                            <a href="product-details.html">
                                <img src="<?= ASSETS_PATH ?>img/banner/banner-1.jpg" alt="banner-image">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-container mb-sm-30">
                            <a href="product-details.html">
                                <img src="<?= ASSETS_PATH ?>img/banner/banner-2.jpg" alt="banner-image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistic area end -->

        <!-- latest news area start -->
        <section class="latest-news-area latest-news-area__style1 fix pt-60 pb-60 pt-sm-30">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>from the blogs</h2>
                        </div>
                    </div>
                </div> <!-- end section title -->
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="blog-slider slick-padding">
                            <div class="blog-item">
                                <div class="single-blog-item bg-gray">
                                    <div class="blog-img-container">
                                        <a href="blog-details.html" class="blog-img-holder blog-img-holder__1"></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">
                                            <i class="ion-ios-calendar-outline"></i>
                                            <span>01 Jan 2023</span>
                                        </div>
                                        <h5 class="post-title"><a href="blog-details.html">post with audio format</a></h5>
                                        <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo
                                            ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus
                                            fermentum eleifend</p>
                                        <a href="blog-details.html" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="single-blog-item bg-gray">
                                    <div class="blog-img-container">
                                        <a href="blog-details.html" class="blog-img-holder blog-img-holder__2"></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">
                                            <i class="ion-ios-calendar-outline"></i>
                                            <span>01 Jan 2023</span>
                                        </div>
                                        <h5 class="post-title"><a href="blog-details.html">post with audio format</a></h5>
                                        <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo
                                            ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus
                                            fermentum eleifend</p>
                                        <a href="blog-details.html" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="single-blog-item bg-gray">
                                    <div class="blog-img-container">
                                        <a href="blog-details.html" class="blog-img-holder blog-img-holder__3"></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-date">
                                            <i class="ion-ios-calendar-outline"></i>
                                            <span>01 Jan 2023</span>
                                        </div>
                                        <h5 class="post-title"><a href="blog-details.html">post with audio format</a></h5>
                                        <p>Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo
                                            ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus
                                            fermentum eleifend</p>
                                        <a href="blog-details.html" class="read-more">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest news area end -->

        <!-- brand area start -->
        <div class="brand-area">
            <div class="container">
                <div class="brand-inner bdr-top pt-30 pb-30">
                    <div class="brand-active slick-padding">
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br1.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br2.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br3.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br4.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br5.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br6.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="<?= ASSETS_PATH ?>img/brand/br3.png" alt="brand image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

    </main>
    <!-- main wrapper end -->

