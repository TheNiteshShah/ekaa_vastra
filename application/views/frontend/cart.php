<main class="main">
  <!-- =============================== START BREADCRUMB ====================================================== -->

  <div class="page-header breadcrumb-wrap">
    <div class="container">
      <div class="breadcrumb">
        <a href="<?= base_url() ?>" rel="nofollow">Home</a>
        <span></span> Your Cart
      </div>
    </div>
  </div>
  <!-- =============================== END BREADCRUMB ====================================================== -->
  <!-- ==================================================== START MAIN CONTENT ==========================================================-->

  <section class="mt-50 mb-50 refreshing">
    <?
    if (!empty($cart_data)) { ?>
      <div class="container">
        <!-- ===================================================== START CART PRODUCTS ======================================================= -->
<style>
  .v-counter {
    border-radius: 32px;
    max-width: 89px;
    overflow: auto;
    /* padding: 0px 4px; */
    border: 1px solid #323140;
    /* margin: 10px; */
}

.v-counter input[type=button]:hover {
    color: black;
    font-weight: bold;
    background-color: transparent;
}
.v-counter span {
   
    font-size: 13px;
    color: black;
    font-family: 'Open Sans';
}
.v-counter input[type=button], input[type=text] {
    display: inline-block;
    width: 20px;
    background-color: transparent;
    outline: none;
    border: none;
    text-align: center;
    cursor: pointer;
    padding: 0px;
    color: black;
    height: 33px;
    font-family: 'Open Sans';
}
</style>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table shopping-summery text-center clean">
                <thead>
                  <tr class="main-heading">
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($cart_data as $cart) { ?>
                    <tr>
                      <td class="image product-thumbnail"><img src="<?= $cart['image'] ?>" alt="Image"></td>
                      <td class="product-des product-name">
                        <h5 class="product-name"><a href="javascript:void()"><?= $cart['product_name'] ?></a></h5>
                        <p class="font-xs">Size: <?= $cart['size'] ?><br />Color: <?= $cart['color'] ?>
                        </p>
                      </td>
                      <td class="price" data-title="Price"><span>₹<?= $cart['price'] ?> </span></td>
                      <td class="text-center" data-title="Stock">
                        <!-- <div class="detail-qty border radius  m-auto">
                          <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                          <span class="qty-val">1</span>
                          <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                        </div> -->
                        <div class="v-counter">
                          <input type="button" class="minusBtn" value="-" />
                          <input type="text" size="25" value="1" class="count" />
                          <input type="button" class="plusBtn" value="+" /> 
                        </div>
                      </td>
                      <td class="text-right" data-title="Cart">
                        <span data-title="Total" id="total<?= $cart['type_id'] ?>">₹<?= $cart['total'] ?> </span>
                      </td>
                      <td class="action" data-title="Remove"><a data-title="Remove"><a href="javascript:;" product_id="<?= base64_encode($cart['product_id']) ?>" type_id="<?= base64_encode($cart['type_id']) ?>" onclick="deleteCart(this)" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                    </tr>
                  <?php $i++;
                  } ?>
                </tbody>
              </table>
            </div>
            <!-- <div class="cart-action text-end">
              <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
            </div> -->
            <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            <div class="row mb-50">
              <div class="col-lg-6 col-md-12">

              </div>
              <div class="col-lg-6 col-md-12">
                <div class="border p-md-4 p-30 border-radius cart-totals">
                  <div class="heading_s1 mb-3">
                    <h4>Cart Totals</h4>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <!-- <tr>
                          <td class="cart_total_label">Cart Subtotal</td>
                          <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">₹<?= $sub_total ?></span></td>
                        </tr>
                        <tr>
                          <td class="cart_total_label">Shipping</td>
                          <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                        </tr> -->
                        <tr>
                          <td class="cart_total_label">Total</td>
                          <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">₹<?= $sub_total ?></span></strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <? if (!empty($this->session->userdata('user_data'))) { ?>
                    <a href="javascript:void(0)" onclick="call_calculate()" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                  <? } else { ?>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                  <? } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <? } else { ?>
      <div class="text-center">
        <img src="<?= base_url() ?>assets/frontend/images/cart_empty.jpg" alt="Empty Cart" class="img-fluid">
      </div>
    <? } ?>
  </section>
</main>