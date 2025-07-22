
function renderProductRange(containerId, start, end) {
  const container = document.getElementById(containerId);
  if (!container) return;

  const range = products.slice(start, end);

  range.forEach(product => {
    const div = document.createElement("div");
    div.className = "col-md-2";
    div.innerHTML = `
      <div class="single__product">
        <div class="single_product__inner">
          <span class="new_badge">${product.badge}</span>
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

  // Init carousel once per section
  $(`#${containerId} .features_product_active`).owlCarousel({
    loop: true,
    nav: true,
    autoplay: false,
    margin: 30,
    autoplayTimeout: 5000,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    items: 5,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      480: {
        items: 1,
        nav: true
      },
      768: {
        items: 2,
        nav: false
      },
      992: {
        items: 4,
        nav: false
      },
      1200: {
        items: 5,
        nav: true,
        loop: false
      },
      1600: {
        items: 7,
        nav: true,
        loop: false
      }
    }
  });
}

// 🔥 Render each section
renderProductRange("product-list", 0, 6); // ID 0–5


renderProductRange("product-list-seven", 15, 21); // ID 30–38
renderProductRange("sorted-products", 0, 21); // ID 30–38

function viewProduct(product) {
  localStorage.setItem("selectedProduct", JSON.stringify(product));
  window.location.href = "product.php";
}

$('.features_product_active').owlCarousel(); // init first
// then AFTER DOM updates:
$('.features_product_active').trigger('refresh.owl.carousel');

// =================Tab secoundry design============================

function renderCompactProductSection(containerId, start, end) {
  const container = document.getElementById(containerId);
  if (!container) return;

  const range = products.slice(start, end);

  range.forEach(product => {
    const div = document.createElement("div");
    div.className = "col-md-3";
    div.innerHTML = `
      <div class="single__product">
        <div class="single_product__inner">
          <span class="new_badge">${product.badge}</span>
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

  // $(`#${containerId}`).addClass('compact_product_carousel'); 

  // $(`#${containerId}.compact_product_carousel`).owlCarousel({
  //   loop: true,
  //   nav: false,
  //   autoplay: false,
  //   autoplayTimeout: 5000,
  //   navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
  //   items: 5,
  //   responsiveClass: true,
  //   margin: 30,
  //   responsive: {
  //     0: { items: 1, nav: true },
  //     575: { items: 2, nav: true },
  //     768: { items: 2, nav: false },
  //     992: { items: 3, nav: false },
  //     1500: { items: 4, nav: true, loop: false }
  //   }
  // });
}


// 🔥 Render each section

renderCompactProductSection("product-list-one", 6, 10); // ID 6–10
renderCompactProductSection("product-list-two", 10, 14); // ID 10–14
renderCompactProductSection("product-list-three", 14, 18); // ID 14–18
renderCompactProductSection("product-list-four", 18, 22); // ID 18–22
renderCompactProductSection("product-list-five", 23, 27); // ID 22–16
renderCompactProductSection("product-list-six", 27, 31); // ID 26–30



// =================secoundry design============================

function renderProductCompactView(containerId, start, end) {
  const container = document.getElementById(containerId);
  if (!container) return;

  const range = products.slice(start, end);

  range.forEach(product => {
    const div = document.createElement("div");
    div.className = "col-md-3";
    div.innerHTML = `
   <div class="best_selling_product">
   <div class="single_small_product mb-30">
                            <div class="product_thumb">
                                <a onclick='viewProduct(${JSON.stringify(product)})'>
                                     <img src="${product.image}" alt="${product.name}" />
                                </a>
                            </div>
                            <div class="product_content">
                                <h4><a onclick='viewProduct(${JSON.stringify(product)})'>${product.name}</a></h4>
                                <div class="product_ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product_price">
                                    <span class="regular_price">$${product.price.toFixed(2)}</span>
                                   <!-- <span class="old_price">$62.23</span> -->
                                </div>
                            </div>
                          </div>      </div>  
    `;
    container.appendChild(div);
  });

  $('.best_selling_product_list').owlCarousel({
    loop: true,
    nav: false,
    autoplay: false,
    autoplayTimeout: 5000,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    items: 5,
    responsiveClass: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      575: {
        items: 2,
        nav: true
      },
      768: {
        items: 2,
        nav: false
      },
      992: {
        items: 3,
        nav: false
      },
      1500: {
        items: 4,
        nav: true,
        loop: false
      }
    }
  });


}

renderProductCompactView("product-list-eight", 23, 31); // ID 24–30

// ================= cart page code ============================
// 🛒 Add product to cart
function addToCart(product) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  const index = cart.findIndex(p => p.id === product.id);

  if (index > -1) {
    cart[index].quantity += 1;
  } else {
    cart.push({ ...product, quantity: 1 });
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  renderMiniCart();
}

// 🧾 Render mini cart in header
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
                <img src="${item.image}" alt="${item.name}" />
                <span class="cart_count">${item.quantity}</span>
              </a>
            </div>
            <div class="cart_info">
              <h5><a href="#">${item.name}</a></h5>
              <span class="cart_price">$${(item.price * item.quantity).toFixed(2)}</span>
            </div>
            <div class="cart_remove">
              <a href="javascript:void(0)" onclick="removeMiniCartItem(${index})"><i class="zmdi zmdi-delete"></i></a>
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
        </div>
        <div class="min_cart_checkout">
          <a href="checkout.php">Checkout</a>
        </div>
      </div>
    </div>
  `;

  const container = document.getElementById("mini-cart-container");
  if (container) container.innerHTML = miniCartHTML;
}

// ❌ Remove product from mini cart
function removeMiniCartItem(index) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  renderMiniCart();
}

// 🚀 Auto-render cart on load
document.addEventListener("DOMContentLoaded", () => {
  if (document.getElementById("mini-cart-container")) {
    renderMiniCart();
  }
});



// ================= wishlist page code ============================

// Add to wishlist
function addToWishlist(product) {
  const wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  if (!wishlist.find(p => p.id === product.id)) {
    wishlist.push(product);
    localStorage.setItem("wishlist", JSON.stringify(wishlist));
    updateWishlistCount();
    alert(`${product.name} added to wishlist!`);
  } else {
    alert(`${product.name} is already in your wishlist.`);
  }
}

// Remove from wishlist
function removeFromWishlist(id) {
  let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  wishlist = wishlist.filter(p => p.id !== id);
  localStorage.setItem("wishlist", JSON.stringify(wishlist));
  updateWishlistCount();
  renderWishlist();
}

// Go to product details
function viewProduct(product) {
  localStorage.setItem("selectedProduct", JSON.stringify(product));
  window.location.href = "product.php"; // Change to .php if needed
}

// Update wishlist icon count
function updateWishlistCount() {
  const wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  document.querySelectorAll(".wishlist_count").forEach(el => {
    el.textContent = wishlist.length;
  });
}

// Render wishlist page
function renderWishlist() {
  const container = document.getElementById("wishlist-items");
  container.innerHTML = "";
  const wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  if (wishlist.length === 0) {
    container.innerHTML = "<p>Your wishlist is empty.</p>";
    return;
  }

  wishlist.forEach(product => {
    const card = document.createElement("tr");
    card.className = "wishlist-card";
    card.innerHTML = `
   
 
                                   
                                    <td class="product-thumbnail">  <img src="${product.image}" alt="${product.name}" width="80px" height="80px">
                                    </td>
                                    <td class="product-name"><a href="javascript:void(0)" onclick='viewProduct(${JSON.stringify(product)})'>${product.name}</a></td>
                                    <td class="product-price"><span class="amount">$${product.price.toFixed(2)}</span></td>
                                    <td class="product-stock-stauts">In Stock</td>
                             
                         <td class="product-add-cart wishlist"><a  href="javascript:void(0)" onclick='viewProduct(${JSON.stringify(product)})'> Add to Cart</a></td>

 <td class="product-remove"><a href="javascript:void(0)" onclick="removeFromWishlist(${product.id})">X</a></td>

    `;
    container.appendChild(card);
  });
}

// Init
document.addEventListener("DOMContentLoaded", () => {
  updateWishlistCount();
  if (document.getElementById("wishlist-items")) {
    renderWishlist();
  }
});



// product item name ============

document.getElementById("product-names-list").innerHTML =
  `<ul>${products.slice(0, 5).map(p =>
    `<li><a href="javascript:void(0)" onclick='viewProduct(${JSON.stringify(p)})'>${p.name}</a></li>`
  ).join('')}</ul>`;

function viewProduct(product) {
  localStorage.setItem("selectedProduct", JSON.stringify(product));
  window.location.href = "product.php";
}


// submission alert ============

document.getElementById("subscribe-form").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent actual form submission
  alert("Thank you for your feedback!");
  this.reset(); // Optional: clear the form
});

