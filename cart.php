<?php $title = "Cart";
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


<div class="cart_main_area">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="img-thumbnail">Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-quantity">Quantity</th>

                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody id="cart-items">



                        </tbody>

                    </table>
                </div>
                <div class="row table-responsive_bottom">
                    <div class="col-lg-7 col-sm-7 col-md-7">
                        <div class="buttons-carts">
                            <!-- <input value="Update Cart" type="submit"> -->
                            <a href="index.php">Update Cart</a>
                            <a href="shop.php">Continue Shopping</a>
                        </div>
                        <div class="buttons-carts coupon">
                            <h3>Coupon</h3>
                            <p>Enter your coupon code if you have one.</p>
                            <input placeholder="Coupon code" type="text">
                            <input value="Apply Coupon" type="submit">
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-5 col-md-5">
                        <div class="cart_totals text-end">
                            <!-- <h2>Cart Totals</h2> -->
                            <!-- <div class="cart-subtotal">
                            <span>Subtotal</span>
                            <span >£215.00</span>
                              
                        </div> -->
                            <div class="order-total">
                                <!-- <span><strong>Total</strong> </span> -->
                                <span><strong id="cart-total"> </strong> </span>

                            </div>
                            <div class="wc-proceed-to-checkout">

                                <button class="new_button" onclick="window.location.href='checkout.php'">Proceed to Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- <button class="new_button" onclick="window.location.href='checkout.php'">Proceed to Checkout</button> -->

<!-- your footer content -->
<?php include "footer.php"; ?>