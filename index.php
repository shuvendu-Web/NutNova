<?php $title = "Home";
include "header.php"; ?>

<!--Slider start-->
<div class="slider_area">
    <div class="slider_list  owl-carousel">
        <div class="single_slide" style="background-image: url(images/banner_1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider__content">
                            <p>Exclusive Offer -10% Off This Week</p>
                            <h2>Start Your <br><strong>Healthy Journey</strong> </h2>

                            <h6>Starting at<span>$42.50</span></h6>
                            <div class="slider_btn">
                                <a href="shop.php">Shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slide" style="background-image: url(images/banner_2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider__content">
                            <p>Exclusive Offer -10% Off This Week</p>
                            <h2>From Our <strong>Farms,</strong> </h2>
                            <h3> to<strong> Your Family! </strong></h3>
                            <h6>Starting at <span>$42.50</span></h6>
                            <div class="slider_btn">
                                <a href="shop.php">Shopping now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Slider end-->

<!--Shipping area start-->
<div class="shipping_area pt-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="shipping_list d-flex justify-content-between flex-xs-column">
                    <div class="single_shipping_box d-flex">
                        <div class="shipping_icon">
                            <img src="images/shop_1.png" alt="shipping icon">
                        </div>
                        <div class="shipping_content">
                            <h6>Free Shipping </h6>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                    <div class="single_shipping_box one d-flex">
                        <div class="shipping_icon">
                            <img src="images/shop_2.png" alt="shipping icon">
                        </div>
                        <div class="shipping_content">
                            <h6>Affordable Prices</h6>
                            <p>Enjoy affordable prices on quality.</p>
                        </div>
                    </div>
                    <div class="single_shipping_box two d-flex">
                        <div class="shipping_icon">
                            <img src="images/shop_3.png" alt="shipping icon">
                        </div>
                        <div class="shipping_content">
                            <h6>Secure Payment</h6>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="single_shipping_box three d-flex">
                        <div class="shipping_icon">
                            <img src="images/shop_4.png" alt="shipping icon">
                        </div>
                        <div class="shipping_content">
                            <h6>Online Support 24/7</h6>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Shipping area end-->

<!--Features product area-->

<!--Features product area-->
<div class="features_product pt-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section_title text-center">
                    <h3> Featured products </h3>
                </div>
            </div>
        </div>
        <div class="row" id="product-list">

            <div class="features_product_active owl-carousel">
                <!-- Products will be dynamically inserted here -->

            </div>

        </div>
    </div>
    <!--Features product end-->


    <!--Features product end-->
    <!--Banner area start-->
    <div class="banner_area home1_banner mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner">

                        <img src="images/ben_1.jpg" alt="">

                        <div class="bnner_text">
                            <a href="#">
                                <h3 class="text-white ">Freshness You Can Taste</h3>
                            </a>
                            <p class="text-white">Sealed with care to lock in natural flavor, crunch, and aroma </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner">

                        <img src="images/ben_2.jpg" alt="">
                        <div class="bnner_text">
                            <a href="#">
                                <h3 class="text-dark text-sm-white">Freshness You Can Taste</h3>
                            </a>
                            <p class="text-dark text-sm-white">Sealed with care to lock in natural flavor, crunch, and aroma —
                                taste the difference in every bite. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner banner_three">

                        <img src="images/ben_3.jpg" alt="">
                        <div class="bnner_text">
                            <a href="#">
                                <h3 class="text-white">Perfect for Every Diet</h3>
                            </a>
                            <p class="text-white">We’ve got options for every lifestyle, without compromising taste.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner area end-->



    <!--shop product area start-->
    <div class="shop_product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shop_product_head d-flex justify-content-between mb-30">
                        <div class="section_title space_2 text-start">
                            <h3>Recommended Products</h3>
                        </div>
                        <div class="home_shop_product text-end">
                            <ul class="product-tab-list nav d-flex flex-wrap justify-content-end" role="tablist">
                                <li role="presentation">
                                    <button class="active" type="button" id="fresh-tab" data-bs-target="#fresh"
                                        data-bs-toggle="tab" role="tab" aria-selected="true" aria-controls="fresh">
                                        Cashews
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button type="button" id="flowers-tab" data-bs-target="#flowers"
                                        data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="flowers">
                                        Almonds
                                    </button>
                                </li>
                                <li role="presentation">
                                    <button type="button" id="organics-tab" data-bs-target="#organics"
                                        data-bs-toggle="tab" role="tab" aria-selected="false" aria-controls="organics">
                                        Mixed Packs
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="shop_larg_product">
                        <div class="single__product_2">
                            <div class="product_img">
                                <a href="#">
                                    <img src="images/pago.png" alt="">
                                </a>
                            </div>
                            <div class="product__content text-center">
                                <div class="product_title">
                                    <h4><a href="shop.php">Premium Dry Fruit & Cashews</a></h4>
                                </div>
                                <div class="product_price">
                                    <p>$42.50 - $99.90 </p>
                                </div>
                                <div class="product-add-to-cart">
                                    <a href="Shop.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="fresh" role="tabpanel" aria-labelledby="fresh-tab">



                            <div class="row" id="product-list-one">



                            </div>

                            <div class="row" id="product-list-two">

                            </div>

                        </div>
                        <div class="tab-pane fade" id="flowers" role="tabpanel" aria-labelledby="flowers-tab">
                            <div class="row" id="product-list-three">

                            </div>
                            <div class="row" id="product-list-four">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="organics" role="tabpanel" aria-labelledby="organics-tab">
                            <div class="row" id="product-list-five">

                            </div>
                            <div class="row" id="product-list-six">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shop product area end-->

    <!--Banner area start-->
    <div class="banner_area home1_banner2 pb-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_banner">

                        <img src="images/big-1.jpg" alt="">
                        <div class="bnner_text">
                            <a href="#">
                                <h3 class="text-white">Gifting Made Special</h3>
                            </a>
                            <p class="text-white">Elegant gift packs for festivals, weddings, and celebrations.
                                Share health and happiness with your loved ones. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single_banner">

                        <img src="images/big-2.jpg" alt="">
                        <div class="bnner_text left_align">
                            <a href="#">
                                <h3 class="text-white">Boost Immunity Naturally</h3>
                            </a>
                            <p class="text-white">Loaded with vitamins, minerals, and antioxidants – dry fruits are
                                your daily dose of nutrition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner area end-->




    <!--New product area-->
    <div class="new_product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title space_2 text-start">
                        <h3>Premium Dry Fruit Combo</h3>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list-seven">
                <div class="features_product_active owl-carousel">



                </div>
            </div>
        </div>
    </div>
    <!--new product end-->

    <!--Banner area start-->
    <div class="banner_area banner_area-2 pb-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="single_banner">
                        <a href="#">
                            <img src="images/banner-4.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="single_banner">
                        <a href="#">
                            <img src="images/banner-5.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_banner">
                        <a href="#">
                            <img src="images/banner-6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner area end-->


    <!--Best seller product -->
    <div class="best_seller_product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section_title space_2 text-start">
                        <h3> Bestseller Products </h3>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list-eight">

            </div>
        </div>
    </div>
    <!--Best seller product  end-->
</div>
<!-- your footer content -->
<?php include "footer.php"; ?>