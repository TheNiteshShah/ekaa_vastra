<main class="main">
  <!-- =============================== START BREADCRUMB ====================================================== -->

  <div class="page-header breadcrumb-wrap">
    <div class="container">
      <div class="breadcrumb">
        <? $cat = explode(" ", $category_name);
        $caturl = implode("-", $cat); ?>
        <a href="<?= base_url() ?>" rel="nofollow">Home</a>
        <span></span>
        <a href="<?= base_url() ?>Home/all_products/<?= $caturl ?>/1" rel="nofollow"><?= $category_name ?></a>
        <span></span> <?= $subcategory_name ?>
      </div>
    </div>
  </div>
  <!-- =============================== END BREADCRUMB ====================================================== -->
  <!--============================================ START MAIN CONTENT =========================================================-->
  <section class="mt-50 mb-50">
    <div class="container">
      <div class="row flex-row-reverse">
        <div class="col-lg-9">
          <? if (!empty($product)) { ?>
            <div class="shop-product-fillter">
              <div class="totall-product">
                <!-- <p> We found <strong class="text-brand">688</strong> items for you!</p> -->
              </div>

              <!-- --------- sort by ---------------- -->
              <div class="sort-by-product-area">
                <div class="sort-by-cover">
                  <div class="sort-by-product-wrap">
                    <div class="sort-by">
                      <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                    </div>
                    <div class="sort-by-dropdown-wrap">
                      <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                    </div>
                  </div>
                  <div class="sort-by-dropdown">
                    <ul>
                      <li><a class="active" href="#">Featured</a></li>
                      <li><a href="#">Price: Low to High</a></li>
                      <li><a href="#">Price: High to Low</a></li>
                      <li><a href="#">Release Date</a></li>
                      <li><a href="#">Avg. Rating</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row product-grid-3">
              <? foreach ($product as $data) {
                $type_mrp = 0;
                $type_spgst = 0;
                $type_datas = $this->db->get_where('tbl_type', array('product_id = ' => $data->id, 'is_active' => 1, 'color_active' => 1, 'size_active' => 1));
                $type_data = $type_datas->row();
                if (!empty($type_data)) {
                  if ($data->product_view == 3) {
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
                  } elseif ($data->product_view == 2) {
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
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="<?= base_url() ?>Home/product_detail/<?= $data->url ?>?type=<?= base64_encode($type_data->id) ?>">
                            <img class="default-img" src="<?= base_url() . $type_data->image ?>" alt="">
                            <img class="hover-img" src="<?= base_url() . $image1 ?>" alt="">
                          </a>
                        </div>
                        <!-- <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-search"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                        </div> -->
                        <? if ($data->exclusive == 1) { ?>
                          <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Hot</span>
                          </div>
                        <? } ?>
                      </div>
                      <div class="product-content-wrap">
                        <!-- <div class="product-category">
                          <a href="shop-grid-right.html">Music</a>
                        </div> -->
                        <h2><a href="<?= base_url() ?>Home/product_detail/<?= $data->url ?>?type=<?= base64_encode($type_data->id) ?>"><?= $data->name ?></a></h2>
                        <div class="rating-result" title="90%">
                          <? if ($percent > 0) { ?>
                            <span>
                              <span><?= round($percent) ?>% Off</span>
                            </span>
                          <? } ?>
                        </div>
                        <div class="product-price">
                          <span>₹<?= $type_spgst ?></span>
                          <? if ($type_mrp > $type_spgst) { ?><span class="old-price">₹<?= $type_mrp ?></span><? } ?>
                        </div>
                        <div class="product-action-1 show">
                          <? $user_id = $this->session->userdata('user_id');
                          if (!empty($user_id)) {
                            $wihslist = $this->db->get_where('tbl_wishlist', array('user_id' => $user_id, 'product_id' => $data->id, 'type_id' => $type_data->id))->result();
                            if (!empty($wihslist)) {
                          ?>
                              <span class="iWish<?= $type_data->id ?>">
                                <a aria-label="Remove" class="action-btn hover-up" href="javascript:void(0)" product_id="<?= base64_encode($data->id) ?>" type_id="<?= base64_encode($type_data->id) ?>" status="remove" onclick="wishlistWithFilter(this)"><i class="fi-rs-heart"></i></a>
                              </span>
                            <? } else { ?>
                              <span class="iWish<?= $type_data->id ?>">
                                <a aria-label="Add" class="action-btn hover-up" href="javascript:void(0)" product_id="<?= base64_encode($data->id) ?>" type_id="<?= base64_encode($type_data->id) ?>" status="add" onclick="wishlistWithFilter(this)"><i class="fi-rs-heart"></i></a>
                              </span>
                            <? }
                          } else { ?>
                            <a aria-label="Add to wishlist" class="action-btn hover-up" href="#" data-bs-toggle="modal" data-bs-target="#LoginModal"><i class="fi-rs-heart"></i></a>
                          <? } ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <? }
              } ?>

            </div>
            <!--pagination-->
            <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
              <nav aria-label="Page navigation example">
                <?php echo $links; ?>
              </nav>
            </div>
          <? } else { ?>
            <div class="w-100 text-center">
              <h4>No items found!</h4>
            </div>
          <? } ?>

        </div>
        <!-- ----------------------- filters ---------------------------- -->
        <div class="col-lg-3 primary-sidebar sticky-sidebar">
          <!-- Fillter By Price -->
          <div class="sidebar-widget price_range range mb-30">
            <div class="widget-header position-relative mb-20 pb-10">
              <div class="row">
                <h5 class="widget-title mb-10">Filters</h5>
                <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Apply</a>
              </div>
              <div class="bt-1 border-color-1"></div>
            </div>
            <div class="price-filter">
              <div class="price-filter-inner">
                <div id="slider-range"></div>
                <div class="price_slider_amount">
                  <div class="label-input">
                    <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                  </div>
                </div>
              </div>
            </div>
            <div class="list-group">
              <div class="list-group-item mb-10 mt-10">
                <!-- ----------------------- Size ---------------------------- -->
                <label class="fw-900">Size</label>
                <div class="custome-checkbox">
                  <? foreach ($filter_size as $size) {
                    $size_filter = $this->db->get_where('tbl_size', array('is_active' => 1, 'id' => $size))->result();
                    if (!empty($size_filter)) {
                  ?>
                      <input class="form-check-input" type="checkbox" name="checkbox" id="s<?= $size_filter[0]->id ?>" name="size[]" value="<?= $size_filter[0]->id ?>">
                      <label class="form-check-label" for="s<?= $size_filter[0]->id ?>"><span><?= $size_filter[0]->name ?></span></label>
                      <br>
                  <? }
                  } ?>

                </div>
                <!-- ----------------------- Colors ---------------------------- -->
                <label class="fw-900 mt-15">Colors</label>
                <div class="custome-checkbox">
                  <? foreach ($filter_color as $color) {
                    $olor_filter = $this->db->get_where('tbl_colour', array('is_active' => 1, 'id' => $color))->result();
                    if (!empty($olor_filter)) {
                  ?>
                      <input class="form-check-input" type="checkbox" id="c<?= $olor_filter[0]->id ?>" name="color[]" value="<?= $olor_filter[0]->id ?>">
                      <label class="form-check-label" for="c<?= $olor_filter[0]->id ?>"><span><?= $olor_filter[0]->colour_name ?></span></label>
                      <br>
                  <? }
                  } ?>

                </div>
                <!-- ----------------------- Other ---------------------------- -->
                <? foreach ($filter_main->result() as $filter) {
                  if ($t == 1) {
                    $column = 'category_id';
                  } else {
                    $column = 'subcategory_id';
                  }
                  $check = $this->db->get_where('tbl_product', array("(JSON_CONTAINS(all_filters,'[\"$filter->id\"]')) > " => 0, $column => $id))->result();
                  if (!empty($check)) {
                ?>
                    <label class="fw-900 mt-15"><?= $filter->name ?></label>
                    <div class="custome-checkbox">
                      <? $attributes = $this->db->get_where('tbl_attribute', array('filter_id = ' => $filter->id));
                      foreach ($attributes->result() as $attr) {
                        if ($t == 1) {
                          $column = 'category_id';
                        } else {
                          $column = 'subcategory_id';
                        }
                        $check2 = $this->db->get_where('tbl_product', array("(JSON_CONTAINS(all_attributes,'[\"$attr->id\"]')) > " => 0, $column => $id))->result();
                        if (!empty($check2)) {
                      ?>
                          <input class="form-check-input" type="checkbox" name="attribute[]" id="f<?= $attr->id ?>" value="<?= $attr->id ?>">
                          <label class="form-check-label" for="f<?= $attr->id ?>"><span><?= $attr->name ?></span></label>
                          <br>
                      <? }
                      } ?>

                    </div>
                <? }
                } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>