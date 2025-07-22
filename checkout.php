<?php $title = "checkout";
include "header.php"; ?>

<!--breadcrumb area start-->
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">Home ></a>
                        </li>
                        <li>Cart </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->

<!--Checkout page section-->

<div class="Checkout_page_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="customer-login mb-40">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Returning customer?
                        <a class="Returning" href="#" data-bs-toggle="collapse"
                            data-bs-target="#Returning_customer" aria-expanded="true">Click here to login</a>

                    </h3>
                    <div id="Returning_customer" class="collapse" data-bs-parent="#accordion">
                        <div class="card-bodyfive">
                            <div class="col-12">
                                <p>Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet
                                    ipsum luctus..</p>
                            </div>
                            <div class="col-lg-4">
                                <form action="#">
                                    <div class="Returning_cart_body mb-20">
                                        <label for="b_names">Username or email <span>*</span></label>
                                        <input id="b_names" type="text">
                                    </div>
                                    <div class="Returning_cart_body mb-20">
                                        <label for="names">Password <span>*</span></label>
                                        <input id="names" type="text">
                                    </div>
                                    <div class="Returning_cart_body returning_three login mb-20">
                                        <input value="Login" type="submit">
                                        <label for="remember-me-box">
                                            <input id="remember-me-box" type="checkbox">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-form">
            <form id="checkout-form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-12 mb-30">
                                <label for="c_country">Country <span class="required">*</span></label>
                                <select id="c_country" required>
                                    <option value="1">Select a country</option>
                                    <option value="2">India</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label for="b_f_name">First Name <span>*</span></label>
                                <input id="b_f_name" type="text" required>
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label for="b_name">Last Name <span>*</span></label>
                                <input id="b_name" type="text" required>
                            </div>
                            <div class="col-12 mb-30">
                                <label for="b_c_name">Company Name</label>
                                <input id="b_c_name" type="text" required>
                            </div>
                            <div class="col-12 mb-30">
                                <label>Address <span>*</span></label>
                                <input placeholder="Street address" type="text">
                            </div>
                            <div class="col-12 mb-30">
                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                            </div>
                            <div class="col-12 mb-30">
                                <label for="b_city">Town / City <span>*</span></label>
                                <input id="b_city" placeholder="Town / City" type="text">
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label for="f_name">State / County <span>*</span></label>
                                <input id="f_name" type="text">
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label for="b_zip">Postcode / Zip <span>*</span></label>
                                <input placeholder="Postcode / Zip" id="b_zip" type="text">
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label for="b_email">Email Address <span>*</span></label>
                                <input id="b_email" type="text">
                            </div>
                            <div class="col-lg-6 mb-30">
                                <label>Phone <span>*</span></label>
                                <input placeholder="Phone Number" type="text">
                            </div>
                            <div class="col-12 mb-30 position-relative">
                                <input id="b_c_account" type="checkbox" data-bs-target="createp_account">
                                <label class="righ_0" for="b_c_account" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-controls="collapseOne">Create an
                                    account?</label>

                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body1">
                                        <p>Create an account by entering the information below. If you are a
                                            returning customer please login at the top of the page.</p>
                                        <label for="b_a_password">Account password <span>*</span></label>
                                        <input id="b_a_password" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-30 position-relative">
                                <input id="b__m__0account" type="checkbox" data-bs-target="createp_account">
                                <label class="righ_1" for="b__m__0account" data-bs-toggle="collapse"
                                    data-bs-target="#collapsetwo" aria-controls="collapseOne">Ship to a
                                    different address?</label>

                                <div id="collapsetwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="row">
                                        <div class="col-12 mb-30">
                                            <label for="b_country">Country <span
                                                    class="required">*</span></label>
                                            <select id="b_country">
                                                <option value="1">Select a country</option>
                                                <option value="2">bangladesh</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">Afghanistan</option>
                                                <option value="5">Ghana</option>
                                                <option value="6">Albania</option>
                                                <option value="7">Bahrain</option>
                                                <option value="8">Colombia</option>
                                                <option value="9">Dominican Republic</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label for="n_f_name">First Name <span>*</span></label>
                                            <input id="n_f_name" type="text">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label for="b__name">Last Name <span>*</span></label>
                                            <input id="b__name" type="text">
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label for="c_n_name">Company Name</label>
                                            <input id="c_n_name" type="text">
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label>Address <span>*</span></label>
                                            <input placeholder="Street address" type="text">
                                        </div>
                                        <div class="col-12 mb-30">
                                            <input placeholder="Apartment, suite, unit etc. (optional)"
                                                type="text">
                                        </div>
                                        <div class="col-12 mb-30">
                                            <label for="b_t_city">Town / City <span>*</span></label>
                                            <input id="b_t_city" placeholder="Town / City" type="text">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label for="s_f_name">State / County <span>*</span></label>
                                            <input id="s_f_name" type="text">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label for="b_p_zip">Postcode / Zip <span>*</span></label>
                                            <input placeholder="Postcode / Zip" id="b_p_zip" type="text">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label for="b_n_email">Email Address <span>*</span></label>
                                            <input id="b_n_email" type="text">
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <label>Phone <span>*</span></label>
                                            <input placeholder="Phone Number" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon-form-two mb-30">
                            <h3>coupon code</h3>
                            <p>Enter your coupon code if you have one</p>
                            <!-- 
                            <input placeholder="Coupon code" type="text">
                            <input value="Apply" type="submit"> -->

                        </div>
                        <div class="order-wrapper">
                            <h3>Your order</h3>
                            <div class="order-table table-responsive mb-30">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody>
                                            <tr>
                                                <td class="product-name"> Vestibulum suscipit <strong> × 1</strong></td>
                                                <td class="amount"> $165.00</td>
                                            </tr>
                                            <tr>
                                                <td class="product-name"> Vestibulum dictum magna <strong> × 1</strong>
                                                </td>
                                                <td class="amount"> $50.00</td>
                                            </tr>
                                        </tbody> -->

                                    <tbody id="checkoutBody"></tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td id="cartSubtotal">$0.00</td>
                                        </tr>
                                        <tr>
                                            <th>Order Total</th>
                                            <td><strong id="orderTotal">$0.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method" id="accordion">
                                <div class="panel-default">
                                    <label class="righ_10" data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                        aria-controls="collapseOne">Direct Bank Transfe</label>

                                    <div id="collapsethree" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body2">
                                            <p>Make your payment directly into our bank account. Please use your
                                                Order ID as the payment reference. Your order won’t be shipped until
                                                the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-default">
                                    <label class="righ_10" data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                        aria-controls="collapseOne" aria-expanded="true">Cheque Payment</label>

                                    <div id="collapsefour" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body2">
                                            <p>Make your payment directly into our bank account. Please use your
                                                Order ID as the payment reference. Your order won’t be shipped until
                                                the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-default">
                                    <label class="righ_10" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                        aria-controls="collapseOne"> PayPal</label>

                                    <div id="collapsefive" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body2">
                                            <p>Make your payment directly into our bank account. Please use your
                                                Order ID as the payment reference. Your order won’t be shipped until
                                                the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button">
                                    <button type="submit">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <form id="checkout-form">
    <input type="text" placeholder="Full Name" required />
    <input type="email" placeholder="Email" required />
    <input type="text" placeholder="Address" required />
    <input type="text" placeholder="City" required />
    <input type="text" placeholder="Zip Code" required />
    <button type="submit" class="btn">Place Order</button>
</form> -->
<!--Checkout page section end-->


</div>


<!-- your footer content -->
<?php include "footer.php"; ?>

<script>
    document.getElementById('checkout-form').addEventListener('submit', function(e) {
        e.preventDefault();
        localStorage.removeItem('cart');
        window.location.href = 'thankyou.php';
    });
</script>