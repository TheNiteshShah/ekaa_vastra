@extends('layouts.frontend.app')
@section('title','home')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
    .hero-tab:active{
        border-bottom: 2px solid #395da7 !important;
    }
    .had {
        padding: 10px 0px;
    }
    .active{
  color: #395da7 !important;
  border-bottom: 2px solid #395da7 !important;
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
</style>
<section class="breadcrumb-area pt-50px pb-50px bg-white pattern-bg widthmin">
    <div class="container">
        <div class="col-lg-8 mr-auto">
            <div class="breadcrumb-content">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>Alert !</strong> {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>Alert !</strong> {{ session()->get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            @endif
                <div class="section-heading">
                    <h2 class="section__title">{{$institute->name}}</h2>
                    <p class="section__desc pt-2 lh-30">{{$institute->address}}</p>
                </div><!-- end section-heading -->
                <div class="d-flex flex-wrap align-items-center pt-3">
                    <!-- <h6 class="ribbon ribbon-lg mr-2 bg-3 text-white">Bestseller</h6> -->
                    <div class="rating-wrap d-flex flex-wrap align-items-center">
                        <div class="review-stars">
                            <?php
                            $maxRating = 5;
                            $sum = App\Models\Institute\InstituteReview::where([
                                'institute_id' => $institute->id,
                                'is_active' => 1,
                            ])->sum('rating');
                            $count = App\Models\Institute\InstituteReview::where([
                                'institute_id' => $institute->id,
                                'is_active' => 1,
                            ])->count();
                            if (($sum != 0) && ($count != 0)) {
                                $average = $sum / $count;
                            } else {
                                $average = 0;
                            }
                            ?>
                            <a href="#ratingdiv"> <span class="rating-number">
                                    @php
                                    $avg=number_format($average, 1);
                                    @endphp
                                    {{$avg}}
                                </span>
                                <?
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                                @for ($i = 1; $i < $avg; $i++) <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                                    <!-- <span class="star">&#9733;</span> -->
                                    @endfor
                                    @if(is_float($average))
                                    <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                    @endif
                                    @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                                    <span class="rating-total pl-1 text-black">{{'('.$count.' ratings )'}}</span></a>
                                </div>
                        <!-- <span class="student-total pl-2">540,815 students</span> -->
                    </div>
                </div><!-- end d-flex -->
                <!-- <p class="pt-2 pb-1">Created by <a href="teacher-detail.html" class="text-color hover-underline">Tim Buchalka</a></p> -->
                <div class="d-flex flex-wrap align-items-center">
                    <p><?= $institute->short_description ?></p>
                </div><!-- end d-flex -->
                <div class="bread-btn-box pt-3">
                    @if(!empty($institute->phone))
                    <a href="{{'tel:+'.$institute->phone}}" class="card-a-c"> <span class="bi bi-telephone-fill" style="margin-right: 10px;"></span>Call</a>
                    @else
                    <a href="{{ route('log_in')}}" class="card-a-c"> <span class="bi bi-telephone-fill" style="margin-right: 10px;"></span>Call</a>
                    @endif
                </div>
            </div><!-- end breadcrumb-content -->
        </div><!-- end col-lg-8 -->
    </div><!-- end container -->
</section>
<section class="hero-tabs container school-navbar" style="height: auto;" >
<div id="list-example" class="hero-tabs-container nava" style="flex-wrap: wrap;">
    <a 
    href="#tab-html" class="hero-tab scrollto active">About</a>
    <a href="#tab-css" class="hero-tab scrollto ">Gallery</a>
    <!-- <a href="#tab-js" class="hero-tab">Basic Info</a> -->
     <a href="#tab-jquery" class="hero-tab scrollto ">Fees Structure</a>
     <a href="#tab-jquer" class="hero-tab   scrollto">Review</a>
    <a href="#tab-jque " class="hero-tab scrollto ">Contact</a>
    <a href="" class="hero-tab "></a>
    <!-- <span class="hero-tab-slider"></span> -->
</div>
</section> 
<main class="main" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
    <section class="slide container contact" id="tab-html" style="height: auto;">
        <div class="lecture-overview-wrap">
            <div class="lecture-overview-item">
                <h3 class="had font-weight-semi-bold pb-2">About</h3>
                <p><?= $institute->description ?></p>
            </div><!-- end lecture-overview-item -->
            <div class="section-block"></div>
        </div>
    </section>
    <section class="slide container" id="tab-css" style="height: auto; margin-top: 20px;">
        <h3 class="had font-weight-semi-bold pb-2">Gallery</h3>
        <div class="container">
            <div class="row" style="margin-bottom: 15px;">
                @php
                $gallery = App\Models\Institute\InstituteGallery::wherenull('deleted_at')->Where(["institute_id" => $institute->id, "is_active" => 1,'is_approved'=>1])->get();
                @endphp
                @foreach($gallery as $gl)
                <div class="col-md-4 gallery-item select1 mt-3">
                    <div class="thumb">
                        <a data-fancybox="gallery" href="{{asset($gl->image)}}">
                            <img class="img-fullwidth" src="{{asset($gl->image)}}" alt="project">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="width: 100%; text-align: center;">
                <button class="moreless-button sxs " href=""> <i class="bi bi-chevron-up"></i></button>
            </div>
        </div>
        </div>
        <!-- <p  id="show" style="cursor: pointer;">Show<i class="bi bi-arrow-bar-down"></i></p> -->
    </section>
    <section class="slide container" id="tab-jquery" style="height: auto;background-color: white ;margin-top: 20px;">
        <h3 class="had font-weight-semi-bold pb-2 mb-2">Fee Structure</h3>
        <a href='{{asset($institute->fees_structure_pdf)}}' target="_blank" style="display: flex;
    flex-direction: row-reverse;"> View PDF</a>
        <div class="row col-xl-12 col-12" style="display:flex;justify-content:center;">
            <a href=" {{asset($institute->fees_structure)}}" target="_blank" style="width: 50%;">
                <img src="{{asset($institute->fees_structure)}}" alt="" style="object-fit: cover;
                            width: 100%;
                            height: 100%;"></a>
        </div>
        </div>
        </div>
    </section>
    <section class="slide container" id="tab-jquer" style="height: auto ; margin-top: 20px;">
        <h3 class="had font-weight-semi-bold pb-2 mb-2">Student feedback</h3>
        <div class="course-overview-card pt-4">
            <div class="feedback-wrap">
                <div class="media media-card align-items-center">
                    <div class="review-rating-summary" id="ratingdiv">
                        <?php
                        $maxRating = 5;
                        $sum = App\Models\Institute\InstituteReview::where([
                            'institute_id' => $institute->id,
                            'is_active' => 1,
                        ])->sum('rating');
                        $count = App\Models\Institute\InstituteReview::where([
                            'institute_id' => $institute->id,
                            'is_active' => 1,
                        ])->count();
                        if (($sum != 0) && ($count != 0)) {
                            $average = $sum / $count;
                        } else {
                            $average = 0;
                        }
                        ?>
                        <span class="stats-average__count">
                            @php
                            $avg=number_format($average, 1);
                            @endphp
                            {{$avg}}
                        </span>
                        <div class="rating-wrap pt-1">
                            <div class="review-stars">
                                <?
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                                @for ($i = 1; $i < $avg; $i++) <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                                    <!-- <span class="star">&#9733;</span> -->
                                    @endfor
                                    @if(is_float($average))
                                    <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                    @endif
                                    @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                            </div>
                            <span class="rating-total d-block">{{'('.$count.')'}}</span>
                            <span>Institute Rating</span>
                        </div><!-- end rating-wrap -->
                    </div><!-- end review-rating-summary -->
                </div>
            </div><!-- end feedback-wrap -->
        </div>
        @if(($ReviewData->first()))
        <section class="testimonial-area section--padding">
            <div class="container">
                <h3 class="had font-weight-semi-bold pb-2">Student Reviews</h3>
                <div class="testimonial-carousel-3 owl-action-styled owl--action-styled mt-35px">
                @foreach($ReviewData as $reviews)
                    <div class="card card-item border border-gray shadow-none">
                        <div class="card-body card-body ">
                            <div class=" d-flex">
                                <div class="avatar-md mb-4">
                                    <img src="{{asset('frontend/images/user.png')}}" alt=" " class="rounded-full">
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="review-stars">
                                    @for ($i = 1; $i < $reviews->rating; $i++) <i class="bi bi-star-fill" style="color:#f68a03;font-size:15px"></i>
                                    <!-- <span class="star">&#9733;</span> -->
                                    @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex " style="justify-content: space-between; border-bottom: 1px solid #8080809c;">
                                <div>
                                    <p class="ko">{{$reviews->name}}</p>
                                </div>
                                <div>
                                    <p class="ko">{{$reviews->date}}</p>
                                </div>
                            </div>
                            <p class="ko mt-2">{{$reviews->message}} </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    @endforeach
                </div><!-- end testimonial-carousel-three -->
            </div><!-- end container -->
        </section>
        @endif
        <div class="course-overview-card pt-4">
            <h3 class="fs-24 font-weight-semi-bold pb-4">Add a Review</h3>
            
            <form method="post" action="{{ route('review_data') }}" enctype='multipart/form-data'>
                {{csrf_field()}}
                <div class="leave-rating-wrap pb-4">
                    <div class="leave-rating leave--rating">
                        <input type="hidden" name="institute_id" value="{{$institute->id }}">
                        <input type="radio" name='rating' value="5" id="star5" />
                        <label for="star5"></label>
                        <input type="radio" name='rating' value="4" id="star4" />
                        <label for="star4"></label>
                        <input type="radio" name='rating' value="3" id="star3" />
                        <label for="star3"></label>
                        <input type="radio" name='rating' value="2" id="star2" />
                        <label for="star2"></label>
                        <input type="radio" name='rating' value="1" id="star1" />
                        <label for="star1"></label>
                    </div><!-- end leave-rating -->
                </div>
                <div class="input-box col-lg-12">
                    <label class="label-text">Review</label>
                    <div class="form-group">
                        <textarea class="form-control form--control pl-3" name="message" placeholder="Write Review" rows="5" required></textarea>
                    </div>
                </div><!-- end input-box -->
                <div class="btn-box col-lg-12">
                    @if(!empty($institute->phone))
                <button class="btn theme-btn" type="submit">Submit Review</button>
                 @else
                    <a href="{{ route('log_in')}}" class="card-a-c">Submit</a>
                    @endif
                </div><!-- end btn-box -->
            </form>
        </div>
    </section>
    <section class="slide container" id="tab-jque" style="height: auto;margin-top: 20px;">
        <h3 class="had font-weight-semi-bold pb-2">Contact</h3>
        <div class="course-overview-card pt-4">
            <form method="post" action="{{ route('contactus_data') }}" enctype='multipart/form-data'>
                {{csrf_field()}}
                <div class="row">
                    <div class="input-box col-lg-6">
                        <input type="hidden" name="institute_id" value="{{$institute->id }}">
                        <label class="label-text">Name</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="name" placeholder="Your Name" required>
                            <!-- <span class="la la-user input-icon"></span> -->
                        </div>
                    </div><!-- end input-box -->
                    <div class="input-box col-lg-6">
                        <label class="label-text">Email</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="Email" name="email" placeholder="Enter Your email" required>
                            <!-- <span class="la la-envelope input-icon"></span> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="input-box col-lg-6">
                        <input type="hidden" name="institute_id" value="{{$institute->id }}">
                        <label class="label-text">Subject</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="subject" placeholder="Enter Subject" required>
                            <!-- <span class="la la-user input-icon"></span> -->
                        </div>
                    </div><!-- end input-box -->
                </div>
                <div class="col-lg-12" style="padding: 0px;">
                    <div class="input-box ">
                        <label class="label-text">Message</label>
                        <div class="form-group">
                            <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5" required></textarea>
                        </div>
                    </div><!-- end input-box -->
                </div>
                <div class="btn-box col-lg-12">
                @if(!empty($institute->phone))
                <button class="btn theme-btn" type="submit">Submit</button>
                 @else
                    <a href="{{ route('log_in')}}" class="card-a-c">Submit</a>
                    @endif
                </div><!-- end btn-box -->
            </form>
        </div>
    </section>
</main>
<script>
    $('#detail .main-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 300,
        lazyLoad: 'ondemand',
        asNavFor: '.thumb-nav',
        prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
        nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
    });
    // Thumbnail/alternates slider for product page
    $('.thumb-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        centerPadding: '0px',
        asNavFor: '.main-img-slider',
        dots: false,
        centerMode: false,
        draggable: true,
        speed: 200,
        focusOnSelect: true,
        prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
        nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
    });
    //keeps thumbnails active when changing main image, via mouse/touch drag/swipe
    $('.main-img-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        //remove all active class
        $('.thumb-nav .slick-slide').removeClass('slick-current');
        //set active class for current slide
        $('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');
    });
</script>
@endsection