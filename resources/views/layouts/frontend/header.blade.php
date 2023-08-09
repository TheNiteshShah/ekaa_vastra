<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Edurators</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{asset('frontend/images/edu1.png')}}">

    <!-- inject:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/tooltipster.bundle.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://www.insightindia.com/mcss/icon-font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.6.0/dist/multiple-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>




    <!-- end inject -->
    <style>
        .sticky {
            position: sticky;
            top: -320px;
            left: 0;
            width: 100%
        }





        a.hero-tab:hover {
            color: #395da7 !important;
            border-bottom: 2px solid #395da7 !important;
        }


        .had {
            padding: 10px 0px;
        }

        #show {
            display: none;
        }

        .j {
            display: block !important;
        }

        section#tab-jque {
            margin-bottom: 30px;
        }



        body {
            font-size: 16px;
            line-height: 28px;
            font-family: Inter, sans-serif;
            /* color: #7f8897; */
            position: relative;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-weight: 500;

            background-color: #f7f7f7 !important;
        }

        .hero-tabs,
        .slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* align-items: center; */
            /* height: 100vh; */
            /* position: relative; */
            background: #ffffff;


        }

        section.hero-tabs.container {
            height: auto;
            position: sticky;
            top: 69px;
            background-color: white !important;
            z-index: 9;
            padding-top: 10px;
        }

        .hero-tabs h1,
        .slide h1 {
            font-size: 2rem;
            margin: 0;
        }

        .hero-tabs h3,
        .slide h3 {
            font-size: 1rem;
            opacity: 0.6;
        }

        .hero-tabs-container {
            display: flex;
            flex-direction: row;
            /* position: absolute; */
            bottom: 0;
            /* margin: 0px 30px; */
            height: 70px;
            background: #fff;
            /* box-shadow: 0 0 30px rgba(0, 0, 0, .1); */
            z-index: 10;
        }


        .hero-tab {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            color: #000;
            transition: all .5 ease;
            font-size: .8em;
            font-weight: 500;
        }

        a {
            text-decoration: none !important;
        }

        @media (max-width:991px) {
            .icon-i{
                display: none !important;
            }
}


        @media (max-width: 800px) {
            .row.align-items-center .col-lg-2 .logo-box a.logo img {
                width: 25% !important;
            }

            .owl-carousel .owl-item img {
                display: block;
                width: 100%;

            }

            .hero-tabs h1,
            .slide h1 {
                font-size: 3rem;
            }

            .hero-tabs h3,
            .slide h3 {
                font-size: 1rem;
            }

            .hero-tab {
                font-size: 1rem;
            }
        }

        .slick-slider .slick-prev,
        .slick-slider .slick-next {
            z-index: 100;
            font-size: 2.5em;
            height: 40px;
            width: 40px;
            margin-top: -20px;
            color: #B7B7B7;
            position: absolute;
            top: 50%;
            text-align: center;
            color: #000;
            opacity: .3;
            transition: opacity .25s;
            cursor: pointer;
        }

        .slick-slider .slick-prev:hover,
        .slick-slider .slick-next:hover {
            opacity: .65;
        }

        .slick-slider .slick-prev {
            left: 0;
        }

        .slick-slider .slick-next {
            right: 0;
        }

        #detail .product-images {
            width: 100%;
            margin: 0 auto;
            border: 1px solid #eee;
        }

        #detail .product-images li,
        #detail .product-images figure,
        #detail .product-images a,
        #detail .product-images img {
            display: block;
            outline: none;
            border: none;
        }

        #detail .product-images .main-img-slider figure {
            margin: 0 auto;
            padding: 0 2em;
        }

        #detail .product-images .main-img-slider figure a {
            cursor: pointer;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in;
        }

        #detail .product-images .main-img-slider figure a img {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }

        #detail .product-images .thumb-nav {
            margin: 0 auto;
            padding: 20px 10px;
            max-width: 600px;
        }

        #detail .product-images .thumb-nav.slick-slider .slick-prev,
        #detail .product-images .thumb-nav.slick-slider .slick-next {
            font-size: 1.2em;
            height: 20px;
            width: 26px;
            margin-top: -10px;
        }

        #detail .product-images .thumb-nav.slick-slider .slick-prev {
            margin-left: -30px;
        }

        #detail .product-images .thumb-nav.slick-slider .slick-next {
            margin-right: -30px;
        }

        #detail .product-images .thumb-nav li {
            display: block;
            margin: 0 auto;
            cursor: pointer;
        }

        #detail .product-images .thumb-nav li img {
            display: block;
            width: 100%;
            max-width: 75px;
            margin: 0 auto;
            border: 2px solid transparent;
            -webkit-transition: border-color .25s;
            -ms-transition: border-color .25s;
            -moz-transition: border-color .25s;
            transition: border-color .25s;
        }

        #detail .product-images .thumb-nav li:hover,
        #detail .product-images .thumb-nav li:focus {
            border-color: #999;
        }

        #detail .product-images .thumb-nav li.slick-current img {
            border-color: #d12f81;
        }

        @media(max-width:1257px) {
            #show {
                display: block;
            }
        }

        @media (max-width: 452px) {
            .box1 div {
                width: auto;
                text-align: center;
            }

            p.boc-text {
                margin-bottom: 0px !important;
            }

            main.main section#tab-css .container .row a.col-md-4 {
                width: 50% !important;
            }

            .box-mine {
                display: flex;
                justify-content: space-between;
                /* flex-direction: column; */
                /* justify-content: center; */
                /* text-align: center; */
                gap: 18px;
                flex-wrap: wrap;
            }

            .box2 div {
                width: auto;
                text-align: center;
            }
        }

        @media (max-width: 452px) {
            .box-mine {
                width: auto !important;
            }
        }

        .theme-btn {
            background-color: #395da7 !important;
            color: #fff;
            font-weight: 600;
            padding: 10px 20px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        .moretext {
            display: none;
        }


        @media (max-width: 394px) {
            section.hero-tabs.container {
                height: auto;
                position: sticky;
                top: 58px;
                background-color: white !important;
                z-index: 9;
            }
        }

        section#tab-css .container .row {
            padding: 0px !important;
        }

        .modal-body {
            padding: 6px !important;

        }

        img.img-fluid.rounded {
            margin-bottom: 10px;
        }

        /* rating star css */
        .star-rating {
            font-size: 20px;
        }

        .star-rating .star {
            color: gold;
        }

        .star-rating .star.empty {
            color: gray;
        }

        .star-rating .star.half {
            position: relative;
            color: gold;
            overflow: hidden;
        }

        .star-rating .star.half:after {
            content: "★";
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            overflow: hidden;
            color: gray;
        }

    </style>

</head>

<body>

    <!-- start cssload-loader -->
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    <!--======================================
        START HEADER AREA
    ======================================-->
    <header class="header-menu-area bg-white">
        <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-widget">
                            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                                <li class="d-flex align-items-center pr-3 mr-3 border-right border-right-gray"><i class="la la-phone mr-1"></i><a href="tel:9783602628">9783602628</a>


                                    <i class="la la-phone m-2"></i><a href="tel:8196902628">8196902628</a>



                                </li>
                                <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a href="mailto:info@Edurators.com">info@Edurators.com</a></li>
                            </ul>
                        </div><!-- end header-widget -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class=" icon-i logout-register header-widget d-flex flex-wrap align-items-center justify-content-end" >
                            <div class="theme-picker d-flex align-items-center">

                            </div>
                            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3">
                                @if (Session::get('token'))
                                <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{ route('user_logout') }}">Log Out </a></li>

                                @else
                                <li class="d-flex align-items-center"><i class="la la-sign-in mr-1"></i><a class="btn  info btn-outline text-black d-none d-lg-inline-block" style="outline:#395da7;" href="{{ route('sign_up')}}"> Register as Institute</a></li>


                                <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a class="btn  info btn-outline text-black d-none d-lg-inline-block" style="outline:#395da7;" href="{{ route('log_in')}}">Log In</a></li>



                                @endif
                            </ul>
                        </div><!-- end header-widget -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-top -->
        <div class="header-menu-content pr-150px pl-150px bg-white">
            <div class="container-fluid">
                <div class="main-menu-content">
                    <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-box">
                                <a href="{{ route('/')}}" class="logo"><img src="{{asset('frontend/images/edu1.png')}}" alt="logo" style="width: 50%;"></a>
                                <div class="user-btn-action" style="display: flex;">

                                    <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu" style="display: none;">
                                        <i class="la la-th-large"></i>
                                    </div>
                                    <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                        <i class="la la-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col-lg-2 -->
                        <div class="col-lg-10">
                            <div class="menu-wrapper">


                                <nav class="main-menu">
                                    <ul>
                                        @php
                                        $category = DB::table('category')->select('*')->where('is_active',1)->get();
                                        @endphp

                                        @foreach($category as $cat)

                                        <li>
                                            <span data-toggle="modal" data-target="#reportModal" data-id="{{$cat->id}}" onclick="changeMyId(this)" style="cursor:pointer;">{{$cat->name}}</span>



                                        </li>
                                        @endforeach

                                    </ul><!-- end ul -->
                                </nav><!-- end main-menu -->
                                <div class="shop-cart mr-4">
                                    <ul>
                                        <li>
                                            <!-- <p class="shop-cart-btn d-flex align-items-center">
                                                <i class="la la-shopping-cart"></i>
                                                <span class="product-count">2</span>
                                            </p> -->
                                            <ul class="cart-dropdown-menu">
                                                <li class="media media-card">
                                                    <a href="shopping-cart.html" class="media-img">
                                                        <img src="{{asset('frontend/images/small-img.jpg')}}" alt="Cart image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                        <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                        <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                    </div>
                                                </li>
                                                <li class="media media-card">
                                                    <a href="shopping-cart.html" class="media-img">
                                                        <img src="{{asset('frontend/images/small-img.jpg')}}" alt="Cart image">
                                                    </a>
                                                    <div class="media-body">
                                                        <h5><a href="course-details.html">The Complete JavaScript Course 2021: From Zero to Expert!</a></h5>
                                                        <span class="d-block lh-18 py-1">Kamran Ahmed</span>
                                                        <p class="text-black font-weight-semi-bold lh-18">$12.99 <span class="before-price fs-14">$129.99</span></p>
                                                    </div>
                                                </li>
                                                <li class="media media-card">
                                                    <div class="media-body fs-16">
                                                        <p class="text-black font-weight-semi-bold lh-18">Total: <span class="cart-total">$12.99</span> <span class="before-price fs-14">$129.99</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="shopping-cart.html" class="btn theme-btn w-100">Got to cart <i class="la la-arrow-right icon ml-1"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><!-- end shop-cart -->
                                <div class="nav-right-button">
                                    <a href="{{ route('contact_us')}}" class="btn theme-btn d-none d-lg-inline-block" id="btn-iit"></i>Contact us</a>
                                </div><!-- end nav-right-button -->
                            </div><!-- end menu-wrapper -->
                        </div><!-- end col-lg-10 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
        <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
            <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
                <i class="la la-times"></i>
            </div>
          









            
            
            <!-- end off-canvas-menu-close -->
            <ul class="generic-list-item off-canvas-menu-list pt-90px">

               <div class="logo-box">
                                <a href="{{ route('/')}}" class="logo"><img src="{{asset('frontend/images/edu1.png')}}" alt="logo" style="width: 41% !important;
                margin-bottom: 17px;"></a>
                               
                            </div>
                @php
                $category = DB::table('category')->select('*')->where('is_active',1)->get();
                @endphp

                @foreach($category as $cat)

                <li>
                    <a data-toggle="modal" data-target="#reportModal" data-id="{{$cat->id}}" onclick="changeMyId(this)" style="cursor:pointer;">{{$cat->name}}</a>



                </li>
                @endforeach

            </ul>
          
            
            <!-- <div class="logout-register header-widget d-flex flex-wrap align-items-center justify-content-end"> -->
                            <div class="theme-picker d-flex align-items-center">

                            </div>
                            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-left border-left-gray pl-3 ml-3" style="    justify-content: space-around;       padding: 0px !important;
    margin: 18px 0px!important;
    flex-direction: column;">
                                @if (Session::get('token'))
                                <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{ route('user_logout') }}" style="display: block !important;">Log Out </a></li>

                                @else
                                <li class="d-flex align-items-center"><i class="la la-sign-in mr-1"></i><a class="btn  info btn-outline text-black d-none d-lg-inline-block" style="outline:#395da7; display: block !important;" href="{{ route('sign_up')}}"> Register Institute</a> </li> 


                                <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a class="btn  info btn-outline text-black d-none d-lg-inline-block" style="outline:#395da7; display: block !important;" href="{{ route('log_in')}}">Log In</a> </li>



                                @endif
                            </ul>
                        </div>



        </div><!-- end off-canvas-menu -->
        <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
            <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
            <ul class="generic-list-item off-canvas-menu-list pt-90px">
                <li>
                    <a href="course-grid.html">Development</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Development</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile Apps</a></li>
                        <li><a href="#">Game Development</a></li>
                        <li><a href="#">Databases</a></li>
                        <li><a href="#">Programming Languages</a></li>
                        <li><a href="#">Software Testing</a></li>
                        <li><a href="#">Software Engineering</a></li>
                        <li><a href="#">E-Commerce</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">business</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Business</a></li>
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Entrepreneurship</a></li>
                        <li><a href="#">Strategy</a></li>
                        <li><a href="#">Real Estate</a></li>
                        <li><a href="#">Home Business</a></li>
                        <li><a href="#">Communications</a></li>
                        <li><a href="#">Industry</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">IT & Software</a>
                    <ul class="sub-menu">
                        <li><a href="#">All IT & Software</a></li>
                        <li><a href="#">IT Certification</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Network & Security</a></li>
                        <li><a href="#">Operating Systems</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Finance & Accounting</a>
                    <ul class="sub-menu">
                        <li><a href="#"> All Finance & Accounting</a></li>
                        <li><a href="#">Accounting & Bookkeeping</a></li>
                        <li><a href="#">Cryptocurrency & Blockchain</a></li>
                        <li><a href="#">Economics</a></li>
                        <li><a href="#">Investing & Trading</a></li>
                        <li><a href="#">Other Finance & Economics</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">design</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Design Tools</a></li>
                        <li><a href="#">3D & Animation</a></li>
                        <li><a href="#">User Experience</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Personal Development</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Personal Development</a></li>
                        <li><a href="#">Personal Transformation</a></li>
                        <li><a href="#">Productivity</a></li>
                        <li><a href="#">Leadership</a></li>
                        <li><a href="#">Personal Finance</a></li>
                        <li><a href="#">Career Development</a></li>
                        <li><a href="#">Parenting & Relationships</a></li>
                        <li><a href="#">Happiness</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Marketing</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Marketing</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Search Engine Optimization</a></li>
                        <li><a href="#">Social Media Marketing</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Video & Mobile Marketing</a></li>
                        <li><a href="#">Affiliate Marketing</a></li>
                        <li><a href="#">Growth Hacking</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Health & Fitness</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Health & Fitness</a></li>
                        <li><a href="#">Fitness</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Dieting</a></li>
                        <li><a href="#">Self Defense</a></li>
                        <li><a href="#">Meditation</a></li>
                        <li><a href="#">Mental Health</a></li>
                        <li><a href="#">Yoga</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li>
                    <a href="course-grid.html">Photography</a>
                    <ul class="sub-menu">
                        <li><a href="#">All Photography</a></li>
                        <li><a href="#">Digital Photography</a></li>
                        <li><a href="#">Photography Fundamentals</a></li>
                        <li><a href="#">Commercial Photography</a></li>
                        <li><a href="#">Video Design</a></li>
                        <li><a href="#">Photography Tools</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- end off-canvas-menu -->
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="post" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-3" type="text" name="search" placeholder="Search for anything">
                        <span class="la la-search search-icon"></span>
                    </div>
                </form>
                <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
            </div>
        </div><!-- end mobile-search-form -->
        <div class="body-overlay"></div>
    </header><!-- end header-menu-area -->
    <!--======================================
        END HEADER AREA
======================================-->