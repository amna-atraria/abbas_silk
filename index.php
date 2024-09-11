<?php include 'Inventory-Management-Admin-Dashboard-main/include/db.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odor - Vape Store WooCommerce HTML Template</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header area start here -->
    <?php include("header.php");  ?>
    <!-- Header area end here -->

    <!-- Preloader area start -->
    <!-- <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div> -->

    <!-- <div id="preloader">
    </div> -->
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here --><!-- 
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div> -->
    <!-- Mouse cursor area end here -->

    <main>

        <!-- Banner area start here -->
        <section class="banner-two">
            <div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft" data-wow-duration="1s"
                data-wow-delay=".5s">
                <img src="assets/images/shape/vape1.png" alt="shape">
            </div>
            <div class="banner-two__shape-right d-none d-lg-block wow bounceInRight" data-wow-duration="1s"
                data-wow-delay=".1s">
                <img class="sway_Y__animation " src="assets/images/shape/vape2.png" alt="shape">
            </div>
            <div class="swiper banner-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-two-image1.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets/images/icon/fire.svg"
                                        alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                    for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                    with localized currencies languages, and <br> experie in
                                    every
                                    market. only a variety of vaping
                                    products</p>
                                <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                        data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                        data-delay="1.9s"><span>View Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-two-image2.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets/images/icon/fire.svg"
                                        alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                    for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                    with localized currencies languages, and <br> experie in
                                    every
                                    market. only a variety of vaping
                                    products</p>
                                <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                        data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                        data-delay="1.9s"><span>View
                                            Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-two-image3.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets/images/icon/fire.svg"
                                        alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                    for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                    with localized currencies languages, and <br> experie in
                                    every
                                    market. only a variety of vaping
                                    products</p>
                                <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                        data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                        data-delay="1.9s"><span>View
                                            Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-two__arry-btn">
                <button class="arry-prev mb-15 banner-two__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                <button class="arry-next active banner-two__arry-next"><i
                        class="fa-light fa-chevron-right"></i></button>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- Category area start here -->
        <section class="category-area category-two pb-130 pt-130">
            <div class="container">
                <div class="bor-bottom pb-130">
                    <div class="sub-title text-center mb-65 wow fadeInUp" data-wow-delay=".1s">
                        <h3><span class="title-icon"></span> our top categories <span class="title-icon"></span>
                        </h3>
                    </div>
                    <div class="swiper category__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category__item category-two__item text-center">
                                    <a href="shop.html" class="category__image d-block">
                                        <img src="assets/images/category/category-image1.png" alt="image">
                                        <div class="category-icon">
                                            <img src="assets/images/category/category-icon1.png" alt="icon">
                                        </div>
                                    </a>
                                    <h4 class="mt-30"><a href="shop.html">best e- juice</a></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category__item category-two__item text-center">
                                    <a href="shop.html" class="category__image d-block">
                                        <img src="assets/images/category/category-image2.png" alt="image">
                                        <div class="category-icon">
                                            <img src="assets/images/category/category-icon2.png" alt="icon">
                                        </div>
                                    </a>
                                    <h4 class="mt-30"><a href="shop.html">best mod</a></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category__item category-two__item text-center">
                                    <a href="shop.html" class="category__image d-block">
                                        <img src="assets/images/category/category-image3.png" alt="image">
                                        <div class="category-icon">
                                            <img src="assets/images/category/category-icon3.png" alt="icon">
                                        </div>
                                    </a>
                                    <h4 class="mt-30"><a href="shop.html">best pan</a></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category__item category-two__item text-center">
                                    <a href="shop.html" class="category__image d-block">
                                        <img src="assets/images/category/category-image4.png" alt="image">
                                        <div class="category-icon">
                                            <img src="assets/images/category/category-icon4.png" alt="icon">
                                        </div>
                                    </a>
                                    <h4 class="mt-30"><a href="shop.html">best pod</a></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category__item category-two__item text-center">
                                    <a href="shop.html" class="category__image d-block">
                                        <img src="assets/images/category/category-image5.png" alt="image">
                                        <div class="category-icon">
                                            <img src="assets/images/category/category-icon5.png" alt="icon">
                                        </div>
                                    </a>
                                    <h4 class="mt-30"><a href="shop.html">best tank</a></h4>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category__item category-two__item text-center">
                                    <a href="shop.html" class="category__image d-block">
                                        <img src="assets/images/category/category-image6.png" alt="image">
                                        <div class="category-icon">
                                            <img src="assets/images/category/category-icon6.png" alt="icon">
                                        </div>
                                    </a>
                                    <h4 class="mt-30"><a href="shop.html">Best vaps</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category area end here -->

        <!-- View area start here -->
        <section class="view-area">
            <div class="bg-image view__bg" data-background="assets/images/bg/view-bg.jpg"></div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".1s">
                        <div class="view__left-item">
                            <div class="image">
                                <img src="assets/images/view/view-image1.jpg" alt="image">
                            </div>
                            <div class="view__left-content sub-bg">
                                <h2><a class="primary-hover" href="shop-single.html">The best e-liqued bundles</a>
                                </h2>
                                <p class="fw-600">Sell globally in minutes with localized currencies languages, and
                                    experie
                                    in every market. only a variety of vaping
                                    products</p>
                                <a class="btn-two" href="shop-single.html"><span>Shop Now</span></a>
                                <a class="off-btn" href="#0"><img class="mr-10" src="assets/images/icon/fire.svg"
                                        alt="icon"> GET
                                    <span class="primary-color">25%
                                        OFF</span> NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="view__item mb-25 wow fadeInDown" data-wow-delay=".2s">
                            <div class="view__content">
                                <h3><a class="primary-hover" href="shop-single.html">new to vapeing?</a></h3>
                                <p>Whereas recognition of the inherent dignity</p>
                                <a class="btn-two" href="shop-single.html"><span>Shop Now</span></a>
                            </div>
                            <div class="view__image">
                                <img src="assets/images/view/view-image2.jpg" alt="image">
                            </div>
                        </div>
                        <div class="view__item wow fadeInUp" data-wow-delay=".3s">
                            <div class="view__content">
                                <h3><a class="primary-hover" href="shop-single.html">Vap mode</a></h3>
                                <p>Whereas recognition of the inherent dignity</p>
                                <a class="btn-two" href="shop-single.html"><span>Shop Now</span></a>
                            </div>
                            <div class="view__image">
                                <img src="assets/images/view/view-image3.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- View area end here -->

        <!-- Product area start here -->
        <section class="product-area pt-130 pb-130 mt-130">
            <div class="container">
                <div class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
                    <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                        <span class="title-icon mr-10"></span>
                        <h2>latest arrival products</h2>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="latest-item" class="tab-pane fade show active">
                        <div class="row g-4">
                            <?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="product__item bor">
                                    <a href="#0" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                    <a href="shop-2.php" class="product__image pt-20 d-block">
                                         <?php
                    $productImages = json_decode($row['product_img'], true);
                    if (!empty($productImages)) {
                        $firstImage = $productImages[1];
                        echo '<img style="width: 100%; height: 100%; object-fit: cover;" src="Inventory-Management-Admin-Dashboard-main/upload/' . $firstImage . '" alt="Product Image">';
                    }
                    ?>
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover" href="shop-single.html"><?php echo $row['product_name'] ?></a></h4>
                                        <span class="primary-color ml-10"><?php echo $row['price'] ?></span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <button type="button" class="btn bg-primary text-light btn-sm add-to-cart" data-id="<?php echo $row['p_id']; ?>">Add to Cart</button>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product area end here -->

        <!-- Discount area start here -->
        <section class="discount-area bg-image" data-background="assets/images/bg/discount-bg2.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image mb-5 mb-lg-0"><img src="assets/images/discount/discount-image2.png"
                                alt="image"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discount__item ps-0 pb-5 pb-lg-0 ps-lg-5">
                            <div class="section-header">
                                <div class="section-title-icon wow fadeInUp" data-wow-delay=".1s">
                                    <span class="title-icon mr-10"></span>
                                    <h2>find your best favourite</h2>
                                </div>
                                <p class="mt-30 mb-55 wow fadeInUp" data-wow-delay=".2s">Sell globally in minutes with
                                    localized currencies languages, and
                                    <br>
                                    experie in every
                                    market. only a variety of vaping
                                    products
                                </p>
                                <a class="btn-one wow fadeInUp" data-wow-delay=".3s" href="shop.html"><span>Shop
                                        Now</span></a>
                                <a class="off-btn wow fadeInUp" data-wow-delay=".4s" href="#0"><img class="mr-10"
                                        src="assets/images/icon/fire.svg" alt="icon"> GET <span
                                        class="primary-color">25%
                                        OFF</span> NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Discount area end here -->

        <!-- Get now area start here -->
        <section class="get-now-area pt-130 pb-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <h4 class="mb-30 wow fadeInUp" data-wow-delay=".1s"><img src="assets/images/icon/fire.svg"
                                alt="icon">
                            GET <span class="primary-color">25% OFF</span> NOW</h4>
                        <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                            <span class="title-icon mr-10"></span>
                            <h2>latest arrival products</h2>
                        </div>
                        <div class="get-now__content">
                            <div class="get-info py-4 wow fadeInUp" data-wow-delay=".2s">
                                <del>$99.00</del> <span>$49.00</span>
                            </div>
                            <p class="fw-600 wow fadeInUp" data-wow-delay=".3s">There are many variations of passages of
                                Lorem Ipsum available, but <br>
                                the
                                majority have
                                suffered alteration in some form,
                                by injected humour, or randomised words which</p>
                            <ul class="pt-30 pb-30 bor-bottom wow fadeInUp" data-wow-delay=".3s">
                                <li>100% Natural</li>
                                <li>Coupon $61.99, Code: W2</li>
                                <li>30 Day Refund</li>
                            </ul>
                            <div class="time-up d-flex flex-wrap align-items-center gap-5 mt-30 wow fadeInUp"
                                data-wow-delay=".4s">
                                <div class="info">
                                    <h4>HUNGRY UP !</h4>
                                    <span>Offer end in :</span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="get-time">
                                        <h3 id="day">00</h3>
                                        <span>Day</span>
                                    </div>
                                    <div class="get-time">
                                        <h3 id="hour">00</h3>
                                        <span>Hr</span>
                                    </div>
                                    <div class="get-time">
                                        <h3 id="min">00</h3>
                                        <span>Min</span>
                                    </div>
                                    <div class="get-time">
                                        <h3 id="sec">00</h3>
                                        <span>Sec</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-now__image mt-5 mt-xl-0">
                            <div class="get-bg-image">
                                <img src="assets/images/shop/get-bg.png" alt="image">
                            </div>
                            <div class="swiper get__slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="assets/images/shop/get-image.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="assets/images/shop/get-image2.png" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="get-now-arry get-now__arry-left">
                                <i class="fa-light fa-chevron-left"></i>
                            </button>
                            <button class="get-now-arry get-now__arry-right text-warning">
                                <i class="fa-light fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get now area end here -->

        <!-- Text slider area start here -->
        <div class="container">
            <div class="bor-top pb-40"></div>
        </div>
        <div class="marquee-wrapper text-slider">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item">
                        E-Cigarettes <img src="assets/images/icon/title-left.svg" alt="icon"> <span>Vape Pens</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        Vape Juice <img src="assets/images/icon/title-left.svg" alt="icon"> <span>E-Cigarettes</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        Vape Pens <img src="assets/images/icon/title-left.svg" alt="icon"> <span>Vape Juice</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        E-Cigarettes <img src="assets/images/icon/title-left.svg" alt="icon"> <span>Vape Pens</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        Vape Juice <img src="assets/images/icon/title-left.svg" alt="icon"> <span>E-Cigarettes</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="bor-top pb-65"></div>
        </div>
        <!-- Text slider area end here -->

        <!-- Gallery area start here -->
        <section class="gallery-area">
            <div class="swiper gallery__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery__item">
                            <div class="off-tag">50% <br>
                                off</div>
                            <div class="gallery__image image">
                                <img src="assets/images/gallery/gallery-image1.jpg" alt="image">
                            </div>
                            <div class="gallery__content">
                                <h3 class="mb-10"><a href="shop-2.html">best e-lequid</a></h3>
                                <p>Best E liquids from our huge collection</p>
                                <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery__item">
                            <div class="off-tag">50% <br>
                                off</div>
                            <div class="gallery__image image">
                                <img src="assets/images/gallery/gallery-image2.jpg" alt="image">
                            </div>
                            <div class="gallery__content">
                                <h3 class="mb-10"><a href="shop-2.html">best vape flavours</a></h3>
                                <p>Best E liquids from our huge collection</p>
                                <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery__item">
                            <div class="off-tag">50% <br>
                                off</div>
                            <div class="gallery__image image">
                                <img src="assets/images/gallery/gallery-image3.jpg" alt="image">
                            </div>
                            <div class="gallery__content">
                                <h3 class="mb-10"><a href="shop-2.html">Battery And Charger Kit</a></h3>
                                <p>Best E liquids from our huge collection</p>
                                <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery__item">
                            <div class="off-tag">50% <br>
                                off</div>
                            <div class="gallery__image image">
                                <img src="assets/images/gallery/gallery-image4.jpg" alt="image">
                            </div>
                            <div class="gallery__content">
                                <h3 class="mb-10"><a href="shop-2.html">best vape tanks</a></h3>
                                <p>Best E liquids from our huge collection</p>
                                <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery__item">
                            <div class="off-tag">50% <br>
                                off</div>
                            <div class="gallery__image image">
                                <img src="assets/images/gallery/gallery-image5.jpg" alt="image">
                            </div>
                            <div class="gallery__content">
                                <h3 class="mb-10"><a href="shop-2.html">POP Extra Strawberry</a></h3>
                                <p>Best E liquids from our huge collection</p>
                                <a href="shop-2.html" class="btn-two mt-25"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery area end here -->

        <!-- Brand area start here -->
        <section class="brand-area pt-130 pb-130">
            <div class="container">
                <div class="sub-title text-center mb-65">
                    <h3><span class="title-icon"></span> our top brands <span class="title-icon"></span>
                    </h3>
                </div>
                <div class="swiper brand__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4">
                                <img src="assets/images/brand/brand1.png" alt="icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4">
                                <img src="assets/images/brand/brand2.png" alt="icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4">
                                <img src="assets/images/brand/brand3.png" alt="icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4">
                                <img src="assets/images/brand/brand4.png" alt="icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4">
                                <img src="assets/images/brand/brand5.png" alt="icon">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item bor radius-10 text-center p-4">
                                <img src="assets/images/brand/brand6.png" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand area end here -->
    </main>

    <!-- Footer area start here -->
    <footer class="footer-area bg-image" data-background="assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer__wrp pt-65 pb-65 bor-top bor-bottom">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".1s">
                        <div class="footer__item">
                            <h4 class="footer-title">Customer Service</h4>
                            <ul>
                                <li><a href="contact.html"><span></span>Help Portal</a></li>
                                <li><a href="contact.html"><span></span>Contact Us</a></li>
                                <li><a href="error.html"><span></span>Delivery Information</a></li>
                                <li><a href="error.html"><span></span>Click and Collect</a></li>
                                <li><a href="error.html"><span></span>Refunds and Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="footer__item">
                            <h4 class="footer-title">Get to Know Us</h4>
                            <ul>
                                <li><a href="about.html"><span></span>About Us</a></li>
                                <li><a href="blog-grid.html"><span></span>News & Blog</a></li>
                                <li><a href="error.html"><span></span>Careers</a></li>
                                <li><a href="error.html"><span></span>Investors</a></li>
                                <li><a href="contact.html"><span></span>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="footer__item">
                            <h4 class="footer-title">vapes new collections</h4>
                            <ul>
                                <li><a href="shop.html"><span></span>E-Cigarettes</a></li>
                                <li><a href="shop.html"><span></span>Vape Pens</a></li>
                                <li><a href="shop.html"><span></span>Pod Systems</a></li>
                                <li><a href="shop.html"><span></span>Disposable Vapes</a></li>
                                <li><a href="shop.html"><span></span>Nicotine Salt Devices</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".4s">
                        <div class="footer__item newsletter">
                            <h4 class="footer-title">get newsletter</h4>
                            <div class="subscribe">
                                <input type="email" placeholder="Your Email">
                                <button><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                            <div class="social-icon mt-40">
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copy-text pt-50 pb-50">
                <a href="index.html" class="logo d-block">
                    <img src="assets/images/logo/logo.svg" alt="logo">
                </a>
                <p>&copy; Copyright 2023 <a href="#0" class="primary-hover">odor</a> All Rights Reserved</p>
                <a href="#0" class="payment d-block image">
                    <img src="assets/images/icon/payment.png" alt="icon">
                </a>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- SweetAlert JS -->
    <script>
   $(document).ready(function() {
    $('.add-to-cart').click(function() {
        var productId = $(this).data('id'); // Change 'p_id' to 'id'

        $.ajax({
            url: 'cart.php', // PHP script to handle adding to the cart
            type: 'POST',
            data: { product_id: productId },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status === 'success') {
                    alert(result.message);
                    // Optionally, update cart item count or other UI elements here
                } else {
                    alert(result.message);
                }
            },
            error: function() {
                alert('Failed to add product to cart.');
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');

            Swal.fire({
                icon: 'success',
                title: 'Added to Cart',
                text: 'Product added to cart successfully!',
                timer: 1000,  // Display time
                timerProgressBar: true,  // Show progress bar
                showConfirmButton: false,  // Hide the confirm button
                background: '#f8f9fa',  // Light background for better readability
                color: '#333',  // Dark text for better contrast
            });
        });
    });
});

</script>

</body>

</html>