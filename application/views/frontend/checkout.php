<main class="main">
    <!-- =============================== START BREADCRUMB ====================================================== -->

    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?= base_url() ?>" rel="nofollow">Home</a>
                <span></span> Checkout
            </div>
        </div>
    </div>
    <!-- =============================== END BREADCRUMB ====================================================== -->
    <section class="mt-50 mb-50">
        <!-- ==================================================== START MAIN CONTENT ==========================================================-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-25">
                        <div style="display: flex;
      justify-content: space-between;">
                            <h4>Billing Details</h4>
                            <a class="btn btn-fill-out btn-block mb-2 " style="width: 30%;
    padding: 5px 7px;" href="<?= base_url() ?>Order/add_address">
                                <? if (!empty($address_data)) {
                                    echo 'Change Address';
                                } else {
                                    echo 'Add Address';
                                } ?>

                            </a>
                        </div>
                    </div>
                    <form method="POST" id="placeOrderForm" action="javascript:;" enctype="multipart/form-data">
                        <? if (!empty($address_data)) { ?>
                            <div class="form-group   d-flex m-0">
                                <p class="ma"><b>First name : </b></p>
                                <p class="mat"><?= $address_data->f_name ?></p>
                            </div>
                            <div class="form-group   d-flex m-0">
                                <p class="ma"><b> Last name : </b></p>
                                <p class="mat"><?= $address_data->l_name ?></p>
                            </div>
                            <div class="form-group   d-flex m-0">
                                <p class="ma"><b> Email Address : </b></p>
                                <p class="mat"><?= $address_data->email ?></p>
                            </div>
                            <input type="hidden" id="totAmt" name="totalAmount" value="<?= $order_data[0]->final_amount ?>" />
                            <div class="form-group   d-flex m-0">
                                <p class="ma"><b> Phone Number : </b></p>
                                <p class="mat"><?= $address_data->phone ?></p>
                            </div>
                            <div class="form-group   d-flex m-0">
                                <p class="ma"><b> State : </b></p>
                                <p class="mat"><?= $address_data->state ?></p>
                            </div>
                            <div class="form-group   d-flex m-0">
                                <p class="ma"><b> City : </b></p>
                                <p class="mat"> <?= $address_data->city ?></p>
                            </div>
                            <div class="form-group d-flex m-0">
                                <p class="ma "><b> Address : </b></p>
                                <p class=" mb-4"> <?= $address_data->address ?></p>

                            </div>
                            <div class="form-group border-input mb-2 p-0 d-flex m-0">
                                <p class="ma "><b> Pincode : </b></p>
                                <p class=" mb-4"> <?= $address_data->pincode ?></p>

                            </div>
                        <? } else { ?>
                            <h5 class="text-center" style="color:#FF324D">Please add address for checkout</h5>
                        <? } ?>
                        <div class="payment_method">
                            <div class="mb-25">
                                <h5>Payment</h5>
                            </div>
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input payment_option" required="" type="radio" name="payment_option" id="exampleRadios4" checked value="1">
                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash On Delivery (COD)</label>
                                    <!-- <div class="form-group collapse in" id="checkPayment">
                                        <p class="text-muted mt-5">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode. </p>
                                    </div> -->
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input payment_option" required="" type="radio" name="payment_option" id="exampleRadios5"  value="2">
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Online Payment</label>
                                    <!-- <div class="form-group collapse in" id="paypal">
                                        <p class="text-muted mt-5">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-fill-out btn-block col-sm-8 mb-3" id="loader" disabled style="display:none">
                  <i class="fa fa-spinner fa-spin"></i>Loading
                </button>
                <button type="submit" class="btn btn-fill-out btn-block col-sm-8 mb-3" id="place">Place Order</a>

                    </form>
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <h4>Your Orders</h4>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table" id="order_review">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cart_fetch['cart_data'] as $cart) { ?>
                                        <tr>
                                            <td class="image product-thumbnail"><img src="<?= $cart['image'] ?>" alt="#"></td>
                                            <td>
                                                <h5><a href="#"><?= $cart['product_name'] ?> </a></h5> <span class="product-qty">x <?= $cart['quantity'] ?></span>
                                            </td>
                                            <td>₹<?= $cart['price'] ?></td>
                                        </tr>
                                    <? } ?>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2">₹<?= $order_data[0]->total_amount ?></td>
                                    </tr>
                                    <?
                                    if (!empty($order_data[0]->promo_discount) && $order_data[0]->promo_discount > 1) {
                                    ?>
                                        <tr>
                                            <th>Discount</th>
                                            <td colspan="2" style="color:green"><em>-₹<?= $order_data[0]->promo_discount ?></em></td>
                                        </tr>
                                    <?
                                    } ?>
                                    <tr>
                                        <th>Shipping</th>
                                        <td colspan="2"><em><? if (empty($order_data[0]->shipping)) {
                                                                echo 'Free Shipping';
                                                            } else {
                                                                echo '₹' . $order_data[0]->shipping;
                                                            } ?></em></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">₹<?= number_format($order_data[0]->final_amount, 2); ?></span></td>
                                    </tr>
                                    <? $promo_string = $this->db->get_where('tbl_promocode', array('id = ' => $order_data[0]->promocode))->result();
                                    $input = "";
                                    if (!empty($promo_string)) {
                                        $input = $promo_string[0]->promocode;
                                    }
                                    if (!empty($input)) {
                                    ?>
                                        <tr>
                                            <th colspan="2" style="color: #FF324D"><a href="javascript:void(0);" onclick="remove_promocode()" style="color:unset;"><?= $input ?>&nbsp;&nbsp<i class="fi-rs-cross" aria-hidden="true"></i></a></th>
                                            <!-- <td></td> -->
                                            <td></td>
                                        </tr>
                                    <?
                                    } ?>
                                </tbody>
                            </table>
                            <form id="promocode_form" method="POST" enctype="multipart/form-data" action="javascript:void(0)">
                                <!-- <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="promocode" id="inputPromocode" required placeholder="Apply Coupon">
                                        </div>
                                    </div>
                                    <div class="col-lg-4" id="apply_promocode">
                                        <button type="submit" href="javascript:void(0);" class="btn btn-fill-out btn-block">Apply</button>
                                    </div>
                                </div> -->
                                <div class="panel-body">
                                <p class="mb-10 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code..." name="promocode" id="inputPromocode" required >
                                    </div>
                                    <div class="form-group"  id="apply_promocode">
                                        <button class="btn  btn-md" type="submit" href="javascript:void(0);">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                            </form>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>