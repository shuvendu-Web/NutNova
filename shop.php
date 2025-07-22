<?php $title = "Shop";
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
                        <li>Shop </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->

<div class="organic_food_wrapper">
    <!--- shop_wrapper area  -->
    <div class="shop_wrapper ptb-90">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-8 col-12">
                    <div class="shop_sidebar">
                        <div class="block_categories">
                            <div class="category_top_menu widget">
                                <div class="widget_title">
                                    <h3>categories</h3>
                                </div>
                                <ul class="shop_toggle">

                                    <li class="has-sub"><a href="#">Cashews </a>
                                        <ul class="categorie_sub">
                                            <li><a href="#">Whole Cashews</a></li>
                                            <li><a href="#">Roasted & Salted Cashews</a></li>
                                            <li><a href="#">Spicy Masala Cashews</a></li>
                                            <li><a href="#">Cashew Broken Pieces</a></li>
                                            <li><a href="#">Cashew Gift Packs</a></li>
                                        </ul>

                                    </li>

                                    <li class="has-sub"><a href="#">Almonds </a>
                                        <ul class="categorie_sub">
                                            <li><a href="#">Raw California Almonds</a></li>
                                            <li><a href="#">Roasted Almonds</a></li>
                                            <li><a href="#">Flavored Almonds</a></li>
                                            <li><a href="#">Almond Slices </a></li>
                                            <li><a href="#">Almond Gift Boxes</a></li>
                                        </ul>

                                    </li>

                                    <li class="has-sub"><a href="#">Mixed Packs </a>
                                        <ul class="categorie_sub">
                                            <li><a href="#">Everyday Energy Mix</a></li>
                                            <li><a href="#">Fitness Nut Blend</a></li>
                                            <li><a href="#"> Trail Mix Pack</a></li>
                                            <li><a href="#">Sweet & Savory Fusion</a></li>
                                            <li><a href="#">Festive Gift Pack</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="search_filters_wrapper">
                            <div class="price_filter widget">
                                <div class="widget_title">
                                    <h3>filter By price</h3>
                                </div>
                               
                                <div class="search_filters widget">
                                    <div id="slider-range"></div>
                                    <input type="text" name="text" id="amount" readonly />
                                </div>
                            </div>

                            <div class="size_clearfix widget  mb-30">
                                <div class="widget_title">
                                    <h3>Nut Nova Collection</h3>
                                </div>
                                <ul>
                                    <li>
                                        <input id="almonds" type="checkbox">
                                        <label for="almonds">Almonds (Badam)</label>
                                    </li>

                                    <li>
                                        <input id="cashews" type="checkbox">
                                        <label for="cashews">Cashews (Kaju)</label>
                                    </li>

                                    <li>
                                        <input id="pistachios" type="checkbox">
                                        <label for="pistachios">Pistachios (Pista)</label>
                                    </li>

                                    <li>
                                        <input id="walnuts" type="checkbox">
                                        <label for="walnuts">Walnuts (Akhrot)</label>
                                    </li>

                                    <li>
                                        <input id="raisins" type="checkbox">
                                        <label for="raisins">Raisins (Kishmish)</label>
                                    </li>

                                    <li>
                                        <input id="dates" type="checkbox">
                                        <label for="dates">Dates (Khajoor)</label>
                                    </li>

                                    <li>
                                        <input id="apricots" type="checkbox">
                                        <label for="apricots">Apricots (Khubani)</label>
                                    </li>

                                    <li>
                                        <input id="figs" type="checkbox">
                                        <label for="figs">Figs (Anjeer)</label>
                                    </li>

                                    <li>
                                        <input id="prunes" type="checkbox">
                                        <label for="prunes">Prunes (Dried Plums)</label>
                                    </li>

                                    <li>
                                        <input id="mixpack" type="checkbox">
                                        <label for="mixpack">Dry Fruit Mix Pack</label>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="categories_banner">
                        <div class="categories_banner_inner">
                            <img src="assets/img/banner/shop.jpg" alt="">
                        </div>
                        <h3>SHOP</h3>
                    </div>
                    <div class="tav_menu_wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-7 col-sm-6">
                                <div class="tab_menu shop_menu">
                                    <div class="tab_menu_inner">
                                        <ul class="nav" role="tablist">
                                            <li><a class="active" data-bs-toggle="tab" href="#shop_active"
                                                    role="tab" aria-controls="shop_active"
                                                    aria-selected="true"><i class="fa fa-th"
                                                        aria-hidden="true"></i></a></li>

                                            <!-- <li><a data-bs-toggle="tab" href="#featured_active" role="tab"
                                                    aria-controls="featured_active" aria-selected="false"><i
                                                        class="fa fa-list" aria-hidden="true"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <!-- <div class="tab_menu_right">
                                        <p>There are 14 products.</p>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-6">
                                <div class="Relevance">
                                    <div class="dropdown dropdown-shop">
                                        <label for="dropdown">Sort by:</label>
                                        <select name="drop" id="dropdown">
                                            <option value="relevance">Relevance</option>
                                            <option value="name-asc">Name, A to Z</option>
                                            <option value="name-desc">Name, Z to A</option>
                                            <option value="price-asc">Price, low to high</option>
                                            <option value="price-desc">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab_product_wrapper">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="shop_active">
                                <div id="sorted-products" class="row"></div>
                                <!-- <div class="row" id="product-list-shop">
                          

                                </div> -->
                            </div>

                        </div>

                    </div>
                    <div class="shop_pagination">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="total_item_shop">
                                    Showing 13-14 of 14 item(s)
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-2 col-md-6 col-sm-6">
                                <div class="page_list_clearfix text-center">
                                    <ul>
                                        <li class="prev"><a href="#"><i class="zmdi zmdi-chevron-left"></i>
                                                Previous</a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="current_page"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#"> Next <i
                                                    class="zmdi zmdi-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- shop_wrapper area end  -->

    <!--shop page section end-->

</div>

<!-- your footer content -->
<?php include "footer.php"; ?>

<script>
    const originalProducts = [...products]; // store original

    function sortProductsBy(type) {
        let sorted = [...originalProducts]; // fresh copy

        switch (type) {
            case 'name-asc':
                sorted.sort((a, b) => a.name.localeCompare(b.name));
                break;
            case 'name-desc':
                sorted.sort((a, b) => b.name.localeCompare(a.name));
                break;
            case 'price-asc':
                sorted.sort((a, b) => a.price - b.price);
                break;
            case 'price-desc':
                sorted.sort((a, b) => b.price - a.price);
                break;
            default:
                sorted = [...originalProducts]; // relevance = original order
        }

        renderSortedProducts(sorted);
    }

    function renderSortedProducts(productList) {
        const container = document.getElementById("sorted-products");
        container.innerHTML = "";

        productList.forEach(product => {
            const div = document.createElement("div");
            div.className = "col-md-2";
            div.innerHTML = `
      <div class="single__product">
        <div class="single_product__inner">
          <span class="new_badge">${product.badge || "new"}</span>
          <div class="product_img">
            <a href="javascript:void(0)" onclick='viewProduct(${JSON.stringify(product)})'>
              <img src="${product.image}" alt="${product.name}" />
            </a>
          </div>
          <div class="product__content text-center">
            <div class="produc_desc_info">
              <div class="product_title">
                <h4><a class="btn" onclick='viewProduct(${JSON.stringify(product)})'>${product.name}</a></h4>
              </div>
              <div class="product_price">
                <p>$${product.price.toFixed(2)}</p>
              </div>
            </div>
            <div class="product__hover">
              <ul>
                <li><a href="javascript:void(0)" onclick='addToCart(${JSON.stringify(product)})'><i class="ion-android-cart"></i></a></li>
                <li><a class="cart-fore" href="javascript:void(0)" onclick='addToWishlist(${JSON.stringify(product)})' >
                <i class="ion-heart"></i></a></li>
                <li><a class="btn" onclick='viewProduct(${JSON.stringify(product)})'><i class="ion-android-open"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    `;
            container.appendChild(div);
        });
    }

    document.getElementById("dropdown").addEventListener("change", function() {
        sortProductsBy(this.value);
    });

    // Load default on page load
    document.addEventListener("DOMContentLoaded", () => {
        renderSortedProducts(originalProducts);
    });
</script>