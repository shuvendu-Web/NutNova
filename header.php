<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title><?php echo $title ?? 'Nut Nova'; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body>
    <!-- Add your site or application content here -->

    <!--organicfood wrapper start-->
    <div class="organic_food_wrapper">
        <!--Header start-->

        <header class="header sticky-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_wrapper_inner">

                            <div class="logo col-xs-12 pt-10 pb-10">
                                <a href="index.php">
                                    <img src="images/logo.png" width="100" alt="">
                                </a>
                            </div>


                            <div class="main_menu_inner">

                                <div class="menu">
                                    <nav>
                                        <ul>

                                            <li class="active"><a href="index.php">Home</a>

                                            </li>
                                            <li><a href="about_us.php">about us </a> </li>
                                            <li><a href="shop.php">shop</a> </li>
                                            <!-- <li><a href="blog.php">Blog </a>
                                            </li> -->

                                            <li><a href="contact.php">Contact US</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="mobile-menu d-lg-none">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="index.php">Home</a>

                                            </li>
                                            <li><a href="about_us.php">about us </a> </li>
                                            <li><a href="shop.php">shop</a> </li>
                                            <!-- <li><a href="blog.php">Blog </a>
                                            </li> -->

                                            <li><a href="contact.php">Contact US</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header_right_info d-flex">
                                <div class="search_box">
                                    <div class="search_inner">
                                        <form id="search-form" autocomplete="off">
                                            <i class="ion-ios-search"></i>
                                            <input type="text" id="search-input" placeholder="Search our catalog" />
                                            <div id="live-search-results"></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="mini__cart">
                                    <div class="mini_cart_inner">
                                        <div class="cart_icon">
                                            <a href="cart.php">
                                                <span class="cart_icon_inner">
                                                    <i class="ion-android-cart"></i>
                                                    <span class="cart_count">2</span>
                                                </span>
                                                <span class="item_total">$00.00</span>
                                            </a>
                                        </div>
                                       
                                        <div class="mini_cart_box cart_box_one">

                                            <div class="mini_cart_item">
                                                <div class="mini_cart_img">
                                                    <a href="#">
                                                        <img src="images/pro2.png" alt="">
                                                        <span class="cart_count">1</span>
                                                    </a>
                                                </div>
                                                <div class="cart_info">
                                                    <h5><a href="#">Country Burger</a></h5>
                                                    <span class="cart_price">$48.99</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                                </div>
                                            </div>

                                            <div class="price_content">
                                                <div class="cart_subtotals">
                                                    <div class="price_inline">
                                                        <span class="label">Subtotal </span>
                                                        <span class="value">$143.49 </span>
                                                    </div>
                                                    <div class="price_inline">
                                                        <span class="label">Shipping </span>
                                                        <span class="value">$7.00</span>
                                                    </div>
                                                    <div class="price_inline">
                                                        <span class="label">Taxes </span>
                                                        <span class="value">$0.00</span>
                                                    </div>
                                                </div>
                                                <div class="cart-total-price">
                                                    <span class="label">Total </span>
                                                    <span class="value">$85.99</span>
                                                </div>
                                            </div>
                                            <div class="min_cart_checkout">
                                                <a href="checkout.php">Checkout</a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div> -->
                                <div class="cart_icon">
                                    <a href="wishlist.php">
                                        <span class="cart_icon_inner">
                                            <i class="ion-heart"></i><span class="cart_count wishlist_count">0</span>
                                        </span>



                                    </a>
                                </div>



                                <div class="mini__cart" id="mini-cart-container"></div>
                                <div class="header_account">
                                    <div class="account_inner">
                                        <!-- <a href="#"><i class="zmdi zmdi-account"></i> <span>&nbsp; Log in</span>
                                            <span>&nbsp; Shuvendu</span></a> -->
                                        <div class="account_inner" id="account-status">
                                            <!-- Login name or "Log in" will be inserted by JS -->
                                        </div>
                                    </div>
                                    <!-- <div class="content-setting-dropdown">
                                        <div class="language-selector-wrapper">


                                            <div class="user_info_top">
                                                <ul>
                                                    <li><a href="my-account.php">
                                                            <i class="zmdi zmdi-account-circle h2"></i>
                                                            &nbsp; my account</a></li>
                                                    <li><a href="checkout.php">
                                                            <i class="zmdi zmdi-shopping-basket"></i> &nbsp;
                                                            Checkout</a></li>
                                                    <li><a href="login.php">
                                                            <i class="zmdi zmdi-account"></i> &nbsp;

                                                            Sign in</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--Header end-->
        <script>
            function renderMiniCart() {
                const cart = JSON.parse(localStorage.getItem("cart")) || [];
                const itemCount = cart.reduce((sum, item) => sum + item.quantity, 0);
                const total = cart.reduce((sum, item) => sum + item.quantity * item.price, 0);

                const miniCartHTML = `
    <div class="mini_cart_inner">
      <div class="cart_icon">
        <a href="cart.php">
          <span class="cart_icon_inner">
            <i class="ion-android-cart"></i>
            <span class="cart_count">${itemCount}</span>
          </span>
          <span class="item_total">$${total.toFixed(2)}</span>
        </a>
      </div>

      <div class="mini_cart_box cart_box_one">
        ${cart.map((item, index) => `
          <div class="mini_cart_item">
            <div class="mini_cart_img">
              <a href="#">
                <img src="${item.image}" alt="">
                <span class="cart_count">${item.quantity}</span>
              </a>
            </div>
            <div class="cart_info">
              <h5><a href="#">${item.name}</a></h5>
              <span class="cart_price">$${(item.price * item.quantity).toFixed(2)}</span>
            </div>
            <div class="cart_remove">
              <a href="#" onclick="removeMiniCartItem(${index})"><i class="zmdi zmdi-delete"></i></a>
            </div>
          </div>
        `).join('')}

        <div class="price_content">
          <div class="cart_subtotals">
            <div class="price_inline">
              <span class="label">Total </span>
              <span class="value">$${total.toFixed(2)}</span>
            </div>
     
          </div>
        <!--  <div class="cart-total-price">
            <span class="label">Total </span>
            <span class="value">$${(total + 7).toFixed(2)}</span>
          </div> -->
        </div>

        <div class="min_cart_checkout">
          <a href="checkout.php">Checkout</a>
        </div>
      </div>
    </div>
  `;

                document.getElementById("mini-cart-container").innerHTML = miniCartHTML;
            }

            function removeMiniCartItem(index) {
                let cart = JSON.parse(localStorage.getItem("cart")) || [];
                cart.splice(index, 1);
                localStorage.setItem("cart", JSON.stringify(cart));
                renderMiniCart(); // refresh
            }

            // Auto-render on load
            if (document.getElementById("mini-cart-container")) {
                renderMiniCart();
            }


            // Dynamic Results

            const searchInput = document.getElementById("search-input");
            const resultBox = document.getElementById("live-search-results");

            searchInput.addEventListener("input", function() {
                const keyword = this.value.toLowerCase().trim();
                if (keyword.length === 0) {
                    resultBox.innerHTML = "";
                    return;
                }

                const results = products.filter(product =>
                    product.name.toLowerCase().includes(keyword)
                );

                if (results.length === 0) {
                    resultBox.innerHTML = "<div class='search-result-item'>No results found.</div>";
                    return;
                }

                resultBox.innerHTML = results.map(product => `
    <div class="search-result-item" onclick='viewProduct(${JSON.stringify(product)})'>
      <img src="${product.image}" alt="${product.name}" />
      <div>
        <strong>${product.name}</strong><br/>
        <small>$${product.price.toFixed(2)}</small>
      </div>
    </div>
  `).join('');
            });
        </script>