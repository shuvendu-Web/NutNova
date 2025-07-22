<?php $title = "Product";
include "header.php"; ?>


<!--breadcrumb area start-->
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Home ></a>
                        </li>
                        <li>Product details </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->


<!-- primary block area -->
<div class="table_primary_block pt-100">
    <div class="container">
        <div class="row" id="product-detail">

        </div>
    </div>
</div>
<!-- primary block end -->

<!-- product page tab -->

<div class="product_page_tab ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_tab_button">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li role="presentation">
                            <button type="button" class="tav_past active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#Description" role="tab" aria-controls="Description"
                                aria-selected="true">Description</button>
                        </li>
                        <!-- <li role="presentation">
                            <button type="button" class="tav_past" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#details" role="tab" aria-controls="details"
                                aria-selected="false">Information</button>
                        </li>
                        <li role="presentation">
                            <button type="button" class="tav_past" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#Reviews" role="tab" aria-controls="Reviews"
                                aria-selected="false">Reviews</button>
                        </li> -->
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Description" role="tabpanel"
                        aria-labelledby="home-tab">
                        <div class="product-description">
                            <p>Indulge in the wholesome goodness of dry fruits — a powerhouse of nutrition, taste, and tradition. From crunchy almonds and buttery cashews to chewy figs and naturally sweet raisins, dry fruits are a time-tested superfood packed with essential vitamins, minerals, and antioxidants.
                                <br><br>
                                Whether you're boosting your daily energy, supporting heart and brain health, or simply satisfying your snack cravings, dry fruits are the go-to choice for health-conscious individuals. They’re cholesterol-free, fiber-rich, and brimming with healthy fats that fuel your body and mind.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="product-details">
                            <div class="product-manufacturer">
                                <a href=""><img src="images/11.jpg" alt=""></a>
                            </div>
                            <div class="product-reference">
                                <label class="label">Reference </label>
                                <span>demo_10</span>
                            </div>
                            <div class="product-quantities">
                                <label class="label">In stock</label>
                                <span>321 Items</span>
                            </div>
                            <div class="product-out-of-stock">
                                <section class="product-features">
                                    <h3>Data sheet</h3>
                                    <dl class="data-sheet">
                                        <dt class="name">Compositions</dt>
                                        <dd class="value">Viscose</dd>
                                        <dt class="name">Styles</dt>
                                        <dd class="value">Dressy</dd>
                                        <dt class="name">Properties</dt>
                                        <dd class="value">Short Dress</dd>
                                    </dl>
                                </section>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="product_comments_block_tab">
                            <div class="comment_clearfix">
                                <div class="comment_author">
                                    <span>Grade </span>
                                    <div class="star_content clearfix">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="comment_author_infos">
                                    <strong>posthemes </strong>
                                    <br>
                                    <em>05/08/2018</em>
                                </div>
                                <div class="comment_details">
                                    <h4>Demo</h4>
                                    <p>themes</p>
                                </div>
                                <div class="review">
                                    <p><a href="#">Write your review !</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product page tab end -->

<!--Features product area-->
<div class="features_product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title text-start">
                    <h3> Bestseller Products </h3>
                </div>
            </div>
        </div>
        <div class="row" id="product-list-eight">

        </div>
    </div>
</div>
<!--Features product end-->





<!-- your footer content -->
<?php include "footer.php"; ?>

<script>
    const product = JSON.parse(localStorage.getItem('selectedProduct'));
    if (!product) window.location.href = 'index.php';

    const thumbnails = product.gallery || [product.image];
    const container = document.getElementById("product-detail");

    container.innerHTML = `
      <div class="col-lg-5 col-md-5 col-sm-12">
    <div class="product-flags">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                <div class="product_tab_img">
                    <a href="#"><img id="mainImage" src="${thumbnails[0]}" width="400px" height="400px" alt=""></a>
                </div>
            </div>
       
        </div>
        <div class="products_tab_button">
            <ul class="nav product_navactive justify-content-center" role="tablist">
                <li class="product_button_one">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tabone" role="tab"
                        aria-controls="imgeone" aria-selected="false">
           ${thumbnails.map(img => `<img src="${img}" onclick="setMainImage('${img}')" width="100px" height="100px" />`).join('')}
                    </a>
                </li>
         
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-7 col-md-7 col-sm-12">
    <div class="product__details_content">
        <div class="demo_product">
            <h2>${product.name}</h2>

        </div>
        <div class="product_comments_block">
            <div class="comments_note clearfix">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
           <!-- <div class="comments_advices">
                <ul>
                    <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                            Read reviews (<span>1</span>)</a></li>
                    <li><a href="#"><i class="fa fa-pencil"></i>Read reviews </a></li>
                </ul>
            </div> -->
        </div>
        <div class="current_price">
               <p class="d-none" id="unitPrice" data-price="${product.price}">$${product.price.toFixed(2)}</p>

            <span >$</span><span id="totalPrice">${product.price.toFixed(2)}</span>
        </div>
        <div class="product_information">
            <div id="product_description_short">
                <p>${product.description}</p>
            </div>
            <div class="product_variants">
      
                <div class="quickview_plus_minus">
                    <span class="control_label">Quantity</span>
                    <div class="quickview_plus_minus_inner">
                        <!-- <div class="cart-plus-minus">
                            <input type="text" value="02" name="qtybutton"
                                class="cart-plus-minus-box">
                        </div> -->
                        <div class="quantity-controls">
                            <button onclick="updateQuantityWithPrice(-1)">−</button>
                            <input type="number" id="quantity" value="1" min="1" />
                            <button onclick="updateQuantityWithPrice(1)">+</button>
                        </div>
                        <div class="add_button">
                     
                                <button class="btn" onclick='addToCartDynamic(${JSON.stringify(product)})'>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="product-availability">
                    <span id="availability">
                        <i class="zmdi zmdi-check"></i>
                        In stock
                    </span>
                </div>
                <div class="social-sharing">
                    <span>Share</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="block-reassurance">
                    <ul>
                        <li>
                            <img src="images/cart1.png" alt="">
                            <span>Security policy (edit with Customer reassurance module)</span>
                        </li>
                        <li>
                            <img src="images/cart2.png" alt="">
                            <span>Delivery policy (edit with Customer reassurance module)</span>
                        </li>
                        <li>
                            <img src="images/cart3.png" alt="">
                            <span>Return policy (edit with Customer reassurance module)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    `;

    function setMainImage(src) {
        document.getElementById("mainImage").src = src;
    }

    function updateQuantityWithPrice(change) {
        const qty = document.getElementById('quantity');
        let val = Math.max(1, parseInt(qty.value) + change);
        qty.value = val;
        const price = parseFloat(document.getElementById('unitPrice').dataset.price);
        document.getElementById('totalPrice').innerText = (val * price).toFixed(2);
    }
</script>

<!-- ============= -->