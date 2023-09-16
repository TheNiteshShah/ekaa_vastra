<main class="main">
  <!-- =============================== START BREADCRUMB ====================================================== -->
  <style>
    .v-counter{margin-top:3px}
    .v-counter input[type=button] {
      width: 30px !important;
    }
  </style>
  <div class="page-header breadcrumb-wrap">
    <div class="container">
      <div class="breadcrumb">
        <? $cat_name = $this->db->get_where('tbl_category', array('id = ' => $product_data[0]->category_id))->result();
        $subcat_name = $this->db->get_where('tbl_subcategory', array('id = ' => $product_data[0]->subcategory_id))->result(); ?>
        <a href="<?= base_url() ?>" rel="nofollow">Home</a> <span></span>
        <a href="<?= base_url() ?>Home/all_products/<?= $cat_name[0]->url ?>/1" rel="nofollow"><?= $cat_name[0]->name ?></a> <span></span>
        <a href="<?= base_url() ?>Home/all_products/<?= $subcat_name[0]->url ?>/1" rel="nofollow"><?= $subcat_name[0]->name ?></a>
        <span></span> <?= $product_data[0]->name ?>
      </div>
    </div>
  </div>
  <!-- =============================== END BREADCRUMB ====================================================== -->
  <!--============================================ START MAIN CONTENT =========================================================-->
  <?php $type_mrp = 0;
  $type_spgst = 0;
  $type_datas = $this->db->get_where('tbl_type', array('product_id = ' => $product_data[0]->id, 'is_active = ' => 1, 'color_active' => 1, 'size_active' => 1));
  $type_data = $this->db->get_where('tbl_type', array('id = ' => $type_id))->result();
  if ($product_data[0]->product_view == 3) {
    if (!empty($this->session->userdata('user_type'))) {
      if ($this->session->userdata('user_type') == 2) {
        $type_mrp = $type_data[0]->reseller_mrp;
        $type_spgst = $type_data[0]->reseller_spgst;
      } else {
        $type_mrp = $type_data[0]->retailer_mrp;
        $type_spgst = $type_data[0]->retailer_spgst;
      }
    } else {
      $type_mrp = $type_data[0]->retailer_mrp;
      $type_spgst = $type_data[0]->retailer_spgst;
    }
  } elseif ($product_data[0]->product_view == 2) {
    $type_mrp = $type_data[0]->reseller_mrp;
    $type_spgst = $type_data[0]->reseller_spgst;
  } else {
    $type_mrp = $type_data[0]->retailer_mrp;
    $type_spgst = $type_data[0]->retailer_spgst;
  }
  $discount = $type_mrp - $type_spgst;
  $percent = 0;
  if ($discount > 0) {
    $percent = $discount / $type_mrp * 100;
    $percent  = round($percent, 2);
  }
  if (!empty($type_data[0]->image2)) {
    $image1 = $type_data[0]->image2;
  } else {
    $image1 = $type_data[0]->image;
  } ?>
  <section class="mt-50 mb-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="product-detail accordion-detail">
            <div class="row mb-50">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="detail-gallery">
                  <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                  <!-- MAIN SLIDES -->
                  <div class="product-image-slider">
                    <figure class="border-radius-10">
                      <img src="<?= base_url() . $type_data[0]->image ?>" alt="product image">
                    </figure>
                    <? if (!empty($type_data[0]->image2)) { ?>
                      <figure class="border-radius-10">
                        <img src="<?= base_url() . $type_data[0]->image2 ?>" alt="product image">
                      </figure>
                    <? }
                    if (!empty($type_data[0]->image3)) { ?>
                      <figure class="border-radius-10">
                        <img src="<?= base_url() . $type_data[0]->image3 ?>" alt="product image">
                      </figure>
                    <? }
                    if (!empty($type_data[0]->image4)) { ?>
                      <figure class="border-radius-10">
                        <img src="<?= base_url() . $type_data[0]->image4 ?>" alt="product image">
                      </figure>
                    <? }
                    if (!empty($type_data[0]->image5)) { ?>
                      <figure class="border-radius-10">
                        <img src="<?= base_url() . $type_data[0]->image5 ?>" alt="product image">
                      </figure>
                    <? }
                    if (!empty($type_data[0]->image6)) { ?>
                      <figure class="border-radius-10">
                        <img src="<?= base_url() . $type_data[0]->image6 ?>" alt="product image">
                      </figure>
                    <? } ?>
                  </div>
                  <!-- THUMBNAILS -->
                  <div class="slider-nav-thumbnails pl-15 pr-15">
                    <div><img src="<?= base_url() . $type_data[0]->image ?>" alt="product image"></div>
                    <? if (!empty($type_data[0]->image2)) { ?>
                      <div><img src="<?= base_url() . $type_data[0]->image2 ?>" alt="product image"></div>
                    <? }
                    if (!empty($type_data[0]->image3)) { ?>
                      <div><img src="<?= base_url() . $type_data[0]->image3 ?>" alt="product image"></div>
                    <? }
                    if (!empty($type_data[0]->image4)) { ?>
                      <div><img src="<?= base_url() . $type_data[0]->image4 ?>" alt="product image"></div>
                    <? }
                    if (!empty($type_data[0]->image5)) { ?>
                      <div><img src="<?= base_url() . $type_data[0]->image5 ?>" alt="product image"></div>
                    <? }
                    if (!empty($type_data[0]->image6)) { ?>
                      <div><img src="<?= base_url() . $type_data[0]->image6 ?>" alt="product image"></div>
                    <? } ?>
                  </div>
                </div>
                <!-- End Gallery -->
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="detail-info">
                  <h2 class="title-detail"><?= $product_data[0]->name ?></h2>
                  <div class="product-detail-rating">
                    <div class="pro-details-brand">
                      <span> SKU: <?= $product_data[0]->sku ?></span>
                    </div>
                    <? $review_count = 0;
                    $totalStars = 0;
                    foreach ($product_reviews->result() as $count) {
                      $review_count++;
                      $totalStars = $count->star_rating + $totalStars;
                    }
                    if ($review_count == 0) {
                      $review_countdiv = 1;
                    } else {
                      $review_countdiv = $review_count;
                    }
                    $rating = ($totalStars / $review_countdiv) * 100;
                    ?>

                    <div class="product-rate-cover text-end">
                      <div class="product-rate d-inline-block">
                        <div class="product-rating" style="width:<?= $rating ?>%">
                        </div>
                      </div>
                      <span class="font-small ml-5 text-muted"> (<?= $review_count ?> reviews)</span>
                    </div>
                  </div>
                  <div class="clearfix product-price-cover">
                    <div class="product-price primary-color float-left">
                      <ins><span class="text-brand">₹<?= $type_spgst ?></span></ins>
                      <? if ($type_mrp > $type_spgst) { ?><ins><span class="old-price font-md ml-15">₹<?= $type_mrp ?></span></ins><? } ?>
                      <? if ($percent > 0) { ?><span class="save-price  font-md color3 ml-15"><?= round($percent) ?>% Off</span> <? } ?>
                    </div>
                  </div>
                  <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                  <div class="short-desc mb-30">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>
                  </div>
                  <div class="product_sort_info font-xs mb-30">
                    <ul>
                      <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                      <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                      <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                    </ul>
                  </div>
                  <!-- ============= COLORS =================== -->
                  <div class="attr-detail attr-color mb-15">
                    <strong class="mr-10">Color</strong>
                    <ul class="list-filter color-filter">
                      <? foreach ($color_arr as $type) {
                        $color = $this->db->get_where('tbl_colour', array('id = ' => $type->colour_id, 'is_active = ' => 1))->result();
                      ?>
                        <li <? if ($type_data[0]->colour_id == $type->colour_id) { ?> class="active" <? } ?>><a href="#" data-color="<?= $color[0]->name ?>" color_id="<?= $color[0]->id ?>" product_id="<?= $product_data[0]->id ?>" onclick="location.href='<?= base_url() ?>Home/product_detail/<?= $product_data[0]->url ?>?type=<?= base64_encode($type->id) ?>'"><span style=" background: <?= $color[0]->name ?>"></span></a></li>
                      <? } ?>
                    </ul>
                  </div>
                  <div class="attr-detail attr-size">
                    <strong class="mr-10">Size</strong>
                    <!-- ============= Size =================== -->
                    <ul class="list-filter size-filter font-small">
                      <?
                      foreach ($size_arr as $size) {
                      ?>
                        <li <? if ($size['id'] == $type_data[0]->size_id) { ?> class="active" <? } ?>><a href="#" onclick="location.href='<?= base_url() ?>Home/product_detail/<?= $product_data[0]->url ?>?type=<?= base64_encode($size['type_id']) ?>'"><?= $size['size_name']; ?></a></li>
                      <? } ?>
                    </ul>
                  </div>
                  <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                  <div class="detail-extralink">
                    <!-- <div class="detail-qty border radius">
                      <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                      <span type="text" readonly onkeypress="return isNumberKey(event)" min-qty="1" name="quantity" product_id='' value="1" title="Qty" id="quantity" class="qty-val">1 </span>
                      <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                    </div> -->
                    <div class="v-counter">
                      <input type="button" class="minusBtn" value="-" change="0" />
                      <input type="text" size="25" class="count" name="quantity" product_id='' value="1" title="Qty" id="quantity" readonly />
                      <input type="button" class="plusBtn" value="+" change="0" />
                    </div>
                    <div class="product-extra-link2">
                      <button product_id="<?= base64_encode($product_data[0]->id) ?>" type_id="<?= base64_encode($type_data[0]->id) ?>" quantity="1" id="addtoCartButton" onclick="addToCart(this)" type="button" class="button button-add-to-cart">Add to cart</button>
                      <? if (!empty($this->session->userdata('user_data'))) {
                        $user_id = $this->session->userdata('user_id');
                        $wihslist = $this->db->get_where('tbl_wishlist', array('user_id' => $user_id, 'product_id' => $product_data[0]->id, 'type_id' => $type_data[0]->id))->result();
                        if (!empty($wihslist)) {
                      ?>
                          <a aria-label="Add To Wishlist" class="action-btn hover-up" href="javascript:void(0)" product_id="<?= base64_encode($product_data[0]->id) ?>" type_id="<?= base64_encode($type_data[0]->id) ?>" status="remove" onclick="wishlist(this)"><i class="fi-rs-heart"></i></a>
                        <? } else { ?>
                          <a aria-label="Add To Wishlist" class="action-btn hover-up" href="javascript:void(0)" product_id="<?= base64_encode($product_data[0]->id) ?>" type_id="<?= base64_encode($type_data[0]->id) ?>" status="add" onclick="wishlist(this)"><i class="fi-rs-heart"></i></a>
                        <? }
                      } else { ?>
                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#LoginModal"><i class="fi-rs-heart"></i></a>

                      <? } ?>
                    </div>
                  </div>
                  <ul class="product-meta font-xs color-grey mt-50">
                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                  </ul>
                </div>
                <!-- Detail Info -->
              </div>
            </div>
            <div class="row">

              <div class="col-lg-10 m-auto entry-main-content">
                <h2 class="section-title style-1 mb-30">Description</h2>
                <div class="description mb-50">
                  <table class="font-md mb-30">
                    <? $description = explode(',', $product_data[0]->description); ?>
                    <tr>
                      <? $i = 1;
                      foreach ($description as $desc) { ?>
                        <td><?= $desc ?></td>
                        <? if ($i % 2 == 0) { ?>
                    </tr>
                    <tr>
                    <? } ?>
                  <? $i++;
                      } ?>
                    </tr>
                  </table>
                </div>
                <div class="social-icons single-share">
                  <ul class="text-grey-5 d-inline-block">
                    <li><strong class="mr-10">Share this:</strong></li>
                    <li class="social-facebook"><a href="#"><img src="<?= base_url() ?>assets/frontend/images/theme/icons/icon-facebook.svg" alt=""></a></li>
                    <li class="social-twitter"> <a href="#"><img src="<?= base_url() ?>assets/frontend/images/theme/icons/icon-twitter.svg" alt=""></a></li>
                    <li class="social-instagram"><a href="#"><img src="<?= base_url() ?>assets/frontend/images/theme/icons/icon-instagram.svg" alt=""></a></li>
                    <li class="social-linkedin"><a href="#"><img src="<?= base_url() ?>assets/frontend/images/theme/icons/icon-pinterest.svg" alt=""></a></li>
                  </ul>
                </div>
                <!--================================= START REVIEWS ==============================================-->

                <? if (!empty($product_reviews->row())) { ?>
                  <h3 class="section-title style-1 mb-30 mt-30">Reviews (3)</h3>
                  <div class="comments-area style-2">
                    <div class="row">
                      <div class="col-lg-8">
                        <h4 class="mb-30">Customer questions & answers</h4>
                        <div class="comment-list">
                          <? foreach ($product_reviews->result() as $reviews) {
                            if ($reviews->star_rating == 1) {
                              $width = 20;
                            } elseif ($reviews->star_rating == 2) {
                              $width = 40;
                            } elseif ($reviews->star_rating == 3) {
                              $width = 60;
                            } elseif ($reviews->star_rating == 4) {
                              $width = 80;
                            } else {
                              $width = 100;
                            }
                          ?>
                            <div class="single-comment justify-content-between d-flex">
                              <div class="user justify-content-between d-flex">
                                <div class="thumb text-center">
                                  <img src="assets/images/page/avatar-6.jpg" alt="">
                                  <h6><a href="#"><?= $reviews->name ?></a></h6>
                                  <p class="font-xxs"><? $newdate = new DateTime($reviews->date);
                                                      echo $newdate->format('F j, Y'); ?></p>
                                </div>
                                <div class="desc">
                                  <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width:<?= $width ?>%">
                                    </div>
                                  </div>
                                  <p> <?= $reviews->review ?></p>
                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                      <p class="font-xs mr-30"><? $newdate = new DateTime($reviews->date);
                                                                echo $newdate->format('F j, Y'); ?> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <? } ?>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <h4 class="mb-30">Customer reviews</h4>
                        <div class="d-flex mb-30">
                          <div class="product-rate d-inline-block mr-15">
                            <div class="product-rating" style="width:90%">
                            </div>
                          </div>
                          <h6>4.8 out of 5</h6>
                        </div>
                        <div class="progress">
                          <span>5 star</span>
                          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <div class="progress">
                          <span>4 star</span>
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                        <div class="progress">
                          <span>3 star</span>
                          <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                        </div>
                        <div class="progress">
                          <span>2 star</span>
                          <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                        <div class="progress mb-30">
                          <span>1 star</span>
                          <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                        <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                      </div>
                    </div>
                  </div>
                <? } ?>
                <!--comment form-->
                <div class="comment-form">
                  <h4 class="mb-15">Add a review</h4>
                  <div class="product-rate d-inline-block mb-30">
                  </div>
                  <div class="row">
                    <div class="col-lg-8 col-md-12">
                      <form class="form-contact comment_form" method="POST" action="<?= base_url() ?>Home/product_review" enctype="multipart/form-data" id="commentForm">
                        <div class="row">
                          <div class="col-12">
                            <input type="hidden" value="<?= $product_data[0]->id ?>" name="product_data" />
                            <input type="hidden" name="star_rating" id="star_rating" value="" required />
                            <div class="form-group">
                              <textarea class="form-control w-100" required name="message" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="name" required id="name" type="text" placeholder="Name">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="email" required id="email" type="email" placeholder="Email">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="button button-contactForm">Submit
                            Review</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--================================= END REVIEWS ==============================================-->

            </div>
            <!--================================= START BUY WITH IT PRODUCTS ==============================================-->
            <? if (!empty($buy_with_it)) { ?>
              <div class="row mt-60">
                <div class="col-12">
                  <h3 class="section-title style-1 mb-30">Buy With It</h3>
                </div>
                <div class="carausel-4-columns-cover arrow-center position-relative">
                  <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                  <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                    <?php $i = 1;
                    foreach ($buy_with_it->result() as $trending) {
                      $type_data = $this->db->get_where('tbl_type', array('is_active' => 1, 'color_active' => 1, 'size_active' => 1, 'product_id' => $trending->id))->row();
                      if (!empty($type_data)) {
                        if ($trending->product_view == 3) {
                          if (!empty($this->session->userdata('user_type'))) {
                            if ($this->session->userdata('user_type') == 2) {
                              $type_mrp = $type_data->reseller_mrp;
                              $type_spgst = $type_data->reseller_spgst;
                            } else {
                              $type_mrp = $type_data->retailer_mrp;
                              $type_spgst = $type_data->retailer_spgst;
                            }
                          } else {
                            $type_mrp = $type_data->retailer_mrp;
                            $type_spgst = $type_data->retailer_spgst;
                          }
                        } elseif ($trending->product_view == 2) {
                          $type_mrp = $type_data->reseller_mrp;
                          $type_spgst = $type_data->reseller_spgst;
                        } else {
                          $type_mrp = $type_data->retailer_mrp;
                          $type_spgst = $type_data->retailer_spgst;
                        }
                        $discount = $type_mrp - $type_spgst;
                        $percent = 0;
                        if ($discount > 0) {
                          $percent = $discount / $type_mrp * 100;
                          $percent  = round($percent, 2);
                        }
                        if (!empty($type_data->image2)) {
                          $image1 = $type_data->image2;
                        } else {
                          $image1 = $type_data->image;
                        }
                    ?>
                        <div class="product-cart-wrap">
                          <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                              <a href="<?= base_url() ?>Home/product_detail/<?= $trending->url ?>?type=<?= base64_encode($type_data->id) ?>">
                                <img class="default-img" src="<?= base_url() . $type_data->image ?>" alt="">
                                <img class="hover-img" src="<?= base_url() . $image1 ?>" alt="">
                              </a>
                            </div>
                            <div class="product-action-1">
                              <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                <i class="fi-rs-eye"></i></a>
                              <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                              <!-- <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                            </div>
                            <? if ($trending->exclusive == 1) { ?>
                              <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                              </div>
                            <? } ?>
                          </div>
                          <div class="product-content-wrap">
                            <!-- <div class="product-category">
                                    <a href="shop-grid-right.html">Nulla</a>
                                </div> -->
                            <h2><a href="<?= base_url() ?>Home/product_detail/<?= $trending->url ?>?type=<?= base64_encode($type_data->id) ?>"><?= $trending->name ?></a></h2>
                            <!-- <div class="rating-result" title="90%">
                                    <span>
                                        <span>70%</span>
                                    </span>
                                </div> -->
                            <? if ($percent > 0) { ?>
                              <span>
                                <span><?= round($percent) ?>% Off</span>
                              </span>
                            <? } ?>
                            <div class="product-price">
                              <span>₹<?= $type_spgst ?></span>
                              <? if ($type_mrp > $type_spgst) { ?><span class="old-price">₹<?= $type_mrp ?></span><? } ?>
                            </div>
                            <!-- <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div> -->
                          </div>
                        </div>
                    <? }
                    } ?>
                  </div>
                </div>
              </div>
            <? } ?>
            <!--================================= END BUY WITH IT PRODUCTS ==============================================-->
            <div class="banner-img banner-big wow fadeIn f-none animated mt-50">
              <img class="border-radius-10" src="<?= base_url() ?>assets/frontend/images/banner/banner-4.png" alt="">
              <div class="banner-text">
                <h4 class="mb-15 mt-40">New Launch</h4>
                <h2 class="fw-600 mb-20">Get Extra 10% off <br>on your first order</h2>
              </div>
            </div>
            <!--================================= START RELATED PRODUCTS ==============================================-->
            <? if (!empty($related_data)) { ?>
              <div class="row mt-60">
                <div class="col-12">
                  <h3 class="section-title style-1 mb-30">Related products</h3>
                </div>
                <div class="carausel-4-columns-cover arrow-center position-relative">
                  <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                  <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                    <?php $i = 1;
                    foreach ($related_data->result() as $trending) {
                      $type_data = $this->db->get_where('tbl_type', array('is_active' => 1, 'color_active' => 1, 'size_active' => 1, 'product_id' => $trending->id))->row();
                      if (!empty($type_data)) {
                        if ($trending->product_view == 3) {
                          if (!empty($this->session->userdata('user_type'))) {
                            if ($this->session->userdata('user_type') == 2) {
                              $type_mrp = $type_data->reseller_mrp;
                              $type_spgst = $type_data->reseller_spgst;
                            } else {
                              $type_mrp = $type_data->retailer_mrp;
                              $type_spgst = $type_data->retailer_spgst;
                            }
                          } else {
                            $type_mrp = $type_data->retailer_mrp;
                            $type_spgst = $type_data->retailer_spgst;
                          }
                        } elseif ($trending->product_view == 2) {
                          $type_mrp = $type_data->reseller_mrp;
                          $type_spgst = $type_data->reseller_spgst;
                        } else {
                          $type_mrp = $type_data->retailer_mrp;
                          $type_spgst = $type_data->retailer_spgst;
                        }
                        $discount = $type_mrp - $type_spgst;
                        $percent = 0;
                        if ($discount > 0) {
                          $percent = $discount / $type_mrp * 100;
                          $percent  = round($percent, 2);
                        }
                        if (!empty($type_data->image2)) {
                          $image1 = $type_data->image2;
                        } else {
                          $image1 = $type_data->image;
                        }
                    ?>
                        <div class="product-cart-wrap">
                          <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                              <a href="<?= base_url() ?>Home/product_detail/<?= $trending->url ?>?type=<?= base64_encode($type_data->id) ?>">
                                <img class="default-img" src="<?= base_url() . $type_data->image ?>" alt="">
                                <img class="hover-img" src="<?= base_url() . $image1 ?>" alt="">
                              </a>
                            </div>
                            <div class="product-action-1">
                              <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                <i class="fi-rs-eye"></i></a>
                              <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                              <!-- <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a> -->
                            </div>
                            <? if ($trending->exclusive == 1) { ?>
                              <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Hot</span>
                              </div>
                            <? } ?>
                          </div>
                          <div class="product-content-wrap">
                            <!-- <div class="product-category">
                                    <a href="shop-grid-right.html">Nulla</a>
                                </div> -->
                            <h2><a href="<?= base_url() ?>Home/product_detail/<?= $trending->url ?>?type=<?= base64_encode($type_data->id) ?>"><?= $trending->name ?></a></h2>
                            <!-- <div class="rating-result" title="90%">
                                    <span>
                                        <span>70%</span>
                                    </span>
                                </div> -->
                            <? if ($percent > 0) { ?>
                              <span>
                                <span><?= round($percent) ?>% Off</span>
                              </span>
                            <? } ?>
                            <div class="product-price">
                              <span>₹<?= $type_spgst ?></span>
                              <? if ($type_mrp > $type_spgst) { ?><span class="old-price">₹<?= $type_mrp ?></span><? } ?>
                            </div>
                            <!-- <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                </div> -->
                          </div>
                        </div>
                    <? }
                    } ?>
                  </div>
                </div>
              </div>
            <? } ?>
            <!--================================= END RELATED PRODUCTS ==============================================-->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>