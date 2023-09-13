<main class="main">
    <!-- =============================== START MAIN SLIDER ====================================================== -->

    <section class="home-slider position-relative pt-50">
        <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
            <?php $a = 0;
            foreach ($slider_data as $slide) { ?>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <!-- <div class="col-lg-5 col-md-6">
                            <div class="hero-slider-content-2">
                                <h4 class="animated">Trade-in offer</h4>
                                <h2 class="animated fw-900">Supper value deals</h2>
                                <h1 class="animated fw-900 text-brand">On all products</h1>
                                <p class="animated">Save more with coupons & up to 70% off</p>
                                <a class="animated btn btn-brush btn-brush-3" href="shop-product-right.html"> Shop Now </a>
                            </div>
                        </div> -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="<?= base_url() . $slide->image ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
        <div class="slider-arrow hero-slider-1-arrow"></div>
    </section>
    <!-- =============================== END MAIN SLIDER ====================================================== -->

    <section class="featured section-padding position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/feature-1.png" alt="">
                        <h4 class="bg-1">Free Shipping</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/feature-2.png" alt="">
                        <h4 class="bg-3">Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/feature-3.png" alt="">
                        <h4 class="bg-2">Save Money</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/feature-4.png" alt="">
                        <h4 class="bg-4">Promotions</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/feature-5.png" alt="">
                        <h4 class="bg-5">Happy Sell</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/feature-6.png" alt="">
                        <h4 class="bg-6">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-2 section-padding pb-0">
        <div class="container">
            <div class="banner-img banner-big wow fadeIn animated f-none">
                <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-4.png" alt="">
                <div class="banner-text d-md-block d-none">
                    <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                    <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                    <a href="shop-grid-right.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== START SHOP BY CATEGORY ====================================================== -->

    <section class="popular-categories section-padding mt-15 mb-25">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
            <div class="carausel-6-columns-cover position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                <div class="carausel-6-columns" id="carausel-6-columns">
                    <?php $i = 1;
                    foreach ($shop_by_category_data as $category) { ?>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="<?= base_url() . $category->image ?>" alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html"><?= $category->name ?></a></h5>
                        </div>
                    <? } ?>

                </div>
            </div>
        </div>
    </section>
    <!-- =============================== END SHOP BY CATEGORY ====================================================== -->

    <section class="banners mb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-1.png" alt="">
                        <div class="banner-text">
                            <span>Smart Offer</span>
                            <h4>Save 20% on <br>Woman Bag</h4>
                            <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow fadeIn animated">
                        <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-2.png" alt="">
                        <div class="banner-text">
                            <span>Sale off</span>
                            <h4>Great Summer <br>Collection</h4>
                            <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-flex">
                    <div class="banner-img wow fadeIn animated  mb-sm-0">
                        <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-3.png" alt="">
                        <div class="banner-text">
                            <span>New Arrivals</span>
                            <h4>Shop Today’s <br>Deals & Offers</h4>
                            <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== START NEW ARRIVAL ================================================ -->

    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
            <div class="carausel-4-columns-cover arrow-center position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                <?php $i = 1;
                    foreach ($whats_data as $trending) {
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
                                        <a href="<?=base_url()?>Home/product_detail/<?=$trending->url?>?type=<?=base64_encode($type_data->id)?>">
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
                                    <h2><a href="<?=base_url()?>Home/product_detail/<?=$trending->url?>?type=<?=base64_encode($type_data->id)?>"><?= $trending->name ?></a></h2>
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
    </section>
    <!-- =============================== END NEW ARRIVAL ================================================ -->
    <section class="mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-bg wow fadeIn animated" style="background-image: url('<?= base_url() ?>assets/frontend/imgs/banner/banner-8.jpg')">
                        <div class="banner-content">
                            <h5 class="text-grey-4 mb-15">Shop Today’s Deals</h5>
                            <h2 class="fw-600">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== START NEW ARRIVAL ================================================ -->

    <section class="section-padding">
        <div class="container wow fadeIn animated">
            <h3 class="section-title mb-20"><span>Ekaa</span> Trending</h3>
            <div class="carausel-4-columns-cover arrow-center position-relative">
                <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows2"></div>
                <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns2">
                    <?php $i = 1;
                    foreach ($trending_data as $trending) {
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
                                        <a href="<?=base_url()?>Home/product_detail/<?=$trending->url?>?type=<?=base64_encode($type_data->id)?>">
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
                                    <h2><a href="<?=base_url()?>Home/product_detail/<?=$trending->url?>?type=<?=base64_encode($type_data->id)?>"><?= $trending->name ?></a></h2>
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
    </section>
    <!-- =============================== END NEW ARRIVAL ================================================ -->
    <section class="section-padding">
        <div class="container pt-25 pb-20">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="section-title mb-20"><span>From</span> blog</h3>
                    <div class="post-list mb-4 mb-lg-0">
                    <?php $i=1; foreach ($blog_data as $blog) { ?>
                        <article class="wow fadeIn animated">
                            <div class="d-md-flex d-block">
                                <div class="post-thumb d-flex mr-15">
                                    <a class="color-white" href="<?=base_url()?>Home/blog_details/<?=base64_encode($blog->id)?>">
                                        <img src="<?=base_url().$blog->image?>" alt="">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div class="entry-meta mb-10 mt-10">
                                        <a class="entry-meta meta-2" href="blog-category-fullwidth.html"><span class="post-in font-x-small"><?=$blog->heading?></span></a>
                                    </div>
                                    <h4 class="post-title mb-25 text-limit-2-row">
                                        <a href="<?=base_url()?>Home/blog_details/<?=base64_encode($blog->id)?>"><?=$blog->description?></a>
                                    </h4>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"><?
                                                        $newdate = new DateTime($blog->date);
                                                        echo $newdate->format('F j, Y');   #d-m-Y  // March 10, 2001, 5:16 pm
                                                        ?></span>
                                            <!-- <span class="hit-count has-dot">12M Views</span> -->
                                        </div>
                                        <a href="<?=base_url()?>Home/blog_details/<?=base64_encode($blog->id)?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?}?>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-img banner-1 wow fadeIn animated">
                                <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-5.jpg" alt="">
                                <div class="banner-text">
                                    <span>Accessories</span>
                                    <h4>Save 17% on <br>Autumn Hat</h4>
                                    <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-img mb-15 wow fadeIn animated">
                                <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-6.jpg" alt="">
                                <div class="banner-text">
                                    <span>Big Offer</span>
                                    <h4>Save 20% on <br>Women's socks</h4>
                                    <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="banner-img banner-2 wow fadeIn animated">
                                <img src="<?= base_url() ?>assets/frontend/imgs/banner/banner-7.jpg" alt="">
                                <div class="banner-text">
                                    <span>Smart Offer</span>
                                    <h4>Save 20% on <br>Eardrop</h4>
                                    <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>