<?php $title = "Wishlist";
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

<!--wishlist page section-->
<div class="cart_main_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive table-wishlist">
                        <table>
                            <thead>
                                <tr>

                                    <th class="img-thumbnail">Image</th>
                                    <th class="product-name">Product Name</th>
                                    <th class="product-price four">Unit Price </th>
                                    <th class="product-stock-stauts">Stock Status </th>
                                    <th class="product-add-cart wishlist">Add To Cart</th>
                                    <th class="product-remove one">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="wishlist-items"></tbody>

                        </table>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--wishlist page section end-->
</div>
<!-- your footer content -->
<?php include "footer.php"; ?>