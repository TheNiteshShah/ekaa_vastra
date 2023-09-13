<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Ekaa Vastra</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/frontend/imgs/theme/favicon.png">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/maind134.css?v=3.4">
    <!-- Include Toast CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
</head>

<body>
<?	$headerMiniCart = [];
  $this->load->library('custom/Cart');
  if (!empty($this->session->userdata('user_data'))) {
      $headerMiniCart = $this->cart->ViewCartOnline();
  } else {
      $headerMiniCart = $this->cart->ViewCartOffline();
  }
  ?>
    <!-- Modal -->
    <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="deal" style="background-image: url('<?= base_url() ?>assets/frontend/imgs/banner/menu-banner-7.png')">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day</h2>
                            <h5>Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>
                            <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"><span class="countdown-section"><span class="countdown-amount hover-up">03</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">02</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">43</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">29</span><span class="countdown-period"> sec </span></span></div>
                            <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login -->
    <div class="modal fade custom-modal" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-between">

                        <h4>LOG IN TO CONTINUE</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="javascript:void(0)" id="loginForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <input name="number" required type="text" id="loginPhone" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" placeholder="Enter Your Number">
                            <input type="hidden" id="loginverify" value="0" name="loginverify">
                        </div>
                        <div class="form-group hidden-OTP-field">
                            <input name="OTP" id="loginOTP" class="form-control rounded-0" type="text" onkeypress="return isNumberKey(event)" maxlength="6" minlength="6" placeholder="Enter OTP">
                        </div>
                        <div class="login_footer form-group">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>By Continuing, I agree to the <a href="term-condition.html" style="color: #FF324D;">Terms of use</a> & <a href="privacy_policy.html" style="color: #FF324D;">Privacy Policy</a></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Log in</button>
                        </div>
                    </form>
                    <div class="text-center"><span class="mt-3">New Here?<a href="javascript:;" data-target="#onload-popup2" data-toggle="modal" data-dismiss="modal" style="color:#ff324d;">&nbsp; Sign Up</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="deal" style="background-image: url('<?= base_url() ?>assets/frontend/imgs/banner/menu-banner-7.png')">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day</h2>
                            <h5>Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New Morden Design</a></h6>
                            <div class="product-price"><span class="new-price">$139.00</span><span class="old-price">$160.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p>Hurry Up! Offer End In:</p>
                            <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"><span class="countdown-section"><span class="countdown-amount hover-up">03</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">02</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">43</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">29</span><span class="countdown-period"> sec </span></span></div>
                            <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-2.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-1.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-3.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-4.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-5.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-6.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="<?= base_url() ?>assets/frontend/imgs/shop/product-16-7.jpg" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                    <div><img src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>

                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
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
                </div>
            </div>
        </div>
    </div>


    <header class="header-area header-style-5 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                                <li><i class="fi-rs-marker"></i><a href="page-contact.html">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="shop-grid-right.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <!-- <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                        <li><a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                    </ul>
                                </li> -->
                                <? if (empty($this->session->userdata('user_data'))) { ?>
                                    <li><i class="fi-rs-user"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">Log In / Sign Up </a></li>
                                <? } else {
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============================== START WEB HEADER ====================================================== -->

        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/frontend/imgs/theme/logo.png" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2" id="headerCount">
                                <? $cartCount = 0;
                                $wishCount = 0;
                                if (!empty($this->session->userdata('user_data'))) {
                                    $cartCount = $this->db->get_where('tbl_cart', array('user_id = ' => $this->session->userdata('user_id'), 'user_type' => $this->session->userdata('user_type')))->num_rows();
                                    $wishCount = $this->db->get_where('tbl_wishlist', array('user_id = ' => $this->session->userdata('user_id'), 'user_type', $this->session->userdata('user_type')))->num_rows();
                                } else {
                                    if (!empty($this->session->userdata('cart_data'))) {
                                        $cartCount = count($this->session->userdata('cart_data'));
                                    }
                                } ?>
                                <div class="header-action-icon-2">
                                    <? if (!empty($this->session->userdata('user_data'))) { ?>
                                        <a href="<?= base_url() ?>Home/my_wishlist">
                                            <img class="svgInject" alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-heart.svg">
                                            <span class="pro-count blue"><?= $wishCount ?></span>
                                        </a>
                                    <? } else { ?>
                                        <a href="#">
                                            <img class="svgInject" alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-heart.svg">
                                            <span class="pro-count blue"><?= $wishCount ?></span>
                                        </a>
                                    <?  } ?>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue"><?= $cartCount ?></span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <? if (!empty($headerMiniCart['cart_data'])) { ?>
                                            <ul>
                                                <? foreach ($headerMiniCart['cart_data'] as $miniCart) { ?>
                                                    <li>
                                                        <div class="shopping-cart-img">
                                                            <a href="#"><img alt="Ekaa Vastra" src="<?=$miniCart['image']?>"></a>
                                                        </div>
                                                        <div class="shopping-cart-title">
                                                            <h4><a href="#"><?=$miniCart['product_name']?></a></h4>
                                                            <h4><span> <?=$miniCart['quantity']?> × </span>₹<?=$miniCart['price']?></h4>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="javascript:;" product_id="<?=base64_encode($miniCart['product_id'])?>" type_id="<?=base64_encode($miniCart['type_id'])?>" onclick="deleteCart(this)" ><i class="fi-rs-cross-small"></i></a>
                                                        </div>
                                                    </li>
                                                <? } ?>
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>Total <span>₹<?=$headerMiniCart['sub_total']?></span></h4>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    <a href="<?=base_url()?>Home/my_bag" class="outline">View cart</a>
                                                </div>
                                            </div>
                                        <? } else { ?>
                                            <img src="<?= base_url() ?>assets/frontend/images/cart_empty.jpg" alt="Empty Cart" class="img-fluid">
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/frontend/imgs/theme/logo.png" alt="Ekaa Vastra"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="" href="<?= base_url() ?>">Home</a></li>
                                    <?
                                    $category_data = $this->db->select('id,name,seq,image,image2,url')->order_by('seq', 'asc')->get_where('tbl_category', array('is_active' => 1))->result();
                                    foreach ($category_data as $category) {
                                        $sub_category = $this->db->select('id,name,url')->get_where('tbl_subcategory', array('is_active' => 1, 'category_id' => $category->id))->result();
                                    ?>
                                        <li class="position-static"><a href="<?= base_url() ?>Home/all_products/<?= $category->url ?>/1" data-toggle="dropdown"><?= $category->name ?><i class="fi-rs-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <ul>
                                                        <? foreach ($sub_category as $index => $subcategory) {
                                                            if ($index % 2 == 0) { ?>
                                                                <li><a href="<?= base_url() ?>Home/all_products/<?= $subcategory->url ?>/1"><?= $subcategory->name ?></a></li>
                                                        <? }
                                                        } ?>
                                                    </ul>
                                                </li>

                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <ul>
                                                        <? foreach ($sub_category as $index => $subcategory) {
                                                            if ($index % 2 != 0) { ?>
                                                                <li><a href="<?= base_url() ?>Home/all_products/<?= $subcategory->url ?>/1"><?= $subcategory->name ?></a></li>
                                                        <? }
                                                        } ?>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-34">
                                                    <div class="menu-banner-wrap">
                                                        <a href="shop-product-right.html"><img src="<?= base_url() . $category->image ?>" alt="<?= $category->name ?>"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    <? } ?>
                                    <li>
                                        <a href="<?= base_url() ?>Home/contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <? if (!empty($this->session->userdata('user_data'))) { ?>
                                    <a href="<?= base_url() ?>Home/my_wishlist">
                                        <img alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count white"><?= $wishCount ?></span>
                                    </a>
                                <? } else { ?>
                                    <a href="#">
                                        <img alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count white"><?= $wishCount ?></span>
                                    </a>
                                <?  } ?>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html2">
                                    <img alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white"><?= $cartCount ?></span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Ekaa Vastra" src="<?= base_url() ?>assets/frontend/imgs/shop/thumbnail-4.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =============================== END WEB HEADER ====================================================== -->
    <!-- =============================== START MOBILE HEADER ====================================================== -->

    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/frontend/imgs/theme/logo.png" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="<?= base_url() ?>">Home</a> </li>
                            <? foreach ($category_data as $category) {
                                $sub_category = $this->db->select('id,name,url')->get_where('tbl_subcategory', array('is_active' => 1, 'category_id' => $category->id))->result();
                            ?>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="<?= base_url() ?>Home/all_products/<?= $category->url ?>/1"><?= $category->name ?></a>
                                    <ul class="dropdown">
                                        <? foreach ($sub_category as $index => $subcategory) { ?>
                                            <li><a href="<?= base_url() ?>Home/all_products/<?= $subcategory->url ?>/1"><?= $subcategory->name ?></a></li>
                                        <? } ?>
                                    </ul>
                                </li>
                            <? } ?>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="<?= base_url() ?>Home/contact"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#LoginModal">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="<?= base_url() ?>assets/frontend/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================== END MOBILE HEADER ====================================================== -->