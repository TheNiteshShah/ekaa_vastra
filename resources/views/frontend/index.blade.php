@extends('layouts.frontend.app')
@section('title','home')
@section('content')
<!--================================
         START HERO AREA
=================================-->
<style>
 .max-lines {
    max-height: 1em; /* Adjust the height based on your desired line height and line count */
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1; /* Set the line limit to 3 lines */
    line-height: 1.2em; 
}
</style>
<section class="hero-area">
    <div class="hero-slider owl-action-styled">
        @foreach($slider as $sd)
        <div class="hero-slider-item" style="background-image: url('{{ $sd->image }}');">
            <div class="container">
                <div class="hero-content">
                    <div class="section-heading">
                        <!-- Your section heading content goes here -->
                    </div><!-- end section-heading -->
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        <!-- Your button box content goes here -->
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-slider-item -->
        @endforeach
    </div><!-- end hero-slide -->
</section><!-- end hero-area -->
<!--================================
        END HERO AREA
=================================-->
<!--======================================
        START FEATURE AREA
 ======================================-->
<!-- end col-lg-4 -->
<section class="course-area " style="padding-bottom: 25px;">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title mt-5" >About Us </h2>
                <span class="section-divider"></span>
            </div>
            <div>
                <p>With the aim of 'To make the education more qualitative and competitive' Edurators has become India's most comprehensive digital platform including the following characteristics:-</p>
            </div><!-- end section-heading -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<section class="feature-area pb-90px">
    <div class="container">
        <div class="row feature-content-wrap">
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-1" width="41" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160
                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160
                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224
                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32
                                                C426.667,241.643,412.309,256,394.667,256z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333
                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32
                                                C129.515,241.643,115.157,256,97.515,256z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667
                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656
                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667
                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96
                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320
                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h3 class="info__title">Rating & Review</h3>
                    <p class="info__text">Every learner trusts on rating and review because it shows your previous hard work for the students.</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-2" viewBox="0 0 74 74" width="45" xmlns="http://www.w3.org/2000/svg">
                            <path d="m31.841 26.02a1 1 0 0 1 -.52-1.855l2.59-1.57a1 1 0 1 1 1.037 1.71l-2.59 1.57a1 1 0 0 1 -.517.145z" />
                            <path d="m57.42 58.09a.985.985 0 0 1 -.294-.045l-20.09-6.179a1 1 0 0 1 -.546-1.5l26.054-40.382-39.324 38.55a1 1 0 0 1 -1.087.208l-16.76-7.03a1 1 0 0 1 -.131-1.777l11.358-6.871a1 1 0 0 1 1.035 1.711l-9.675 5.853 14.334 6.013 39.106-38.341-20.363 12.316a1 1 0 0 1 -1.037-1.716l27.709-16.747a1 1 0 0 1 .372-.14s0 0 0 0a.986.986 0 0 1 .156-.013 1 1 0 0 1 .609.206l.079.067a1 1 0 0 1 .312.713 1.023 1.023 0 0 1 -.023.227l-10.814 54.073a1 1 0 0 1 -.98.8zm-18.533-7.747 17.769 5.466 9.572-47.844z" />
                            <path d="m23.221 31.23a1 1 0 0 1 -.519-1.856l2.53-1.53a1 1 0 0 1 1.036 1.712l-2.531 1.53a1 1 0 0 1 -.516.144z" />
                            <path d="m28.7 72h-.072a1 1 0 0 1 -.894-.74l-6.178-23.184a1 1 0 1 1 1.931-.515l5.438 20.389 7.488-17.435a1 1 0 1 1 1.838.789l-8.629 20.096a1 1 0 0 1 -.922.6z" />
                            <path d="m28.709 72a1 1 0 0 1 -.736-1.677l16.092-17.515a1 1 0 0 1 1.473 1.354l-16.093 17.515a1 1 0 0 1 -.736.323z" />
                        </svg>
                    </div>
                    <h3 class="info__title">Dynamic Account</h3>
                    <p class="info__text">Institutes have liberty to update their annual results, achievements, facilities, fee structure, contact details etc on a regular basis. </p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="info-box">
                    <div class="info-overlay"></div>
                    <div class="icon-element mx-auto shadow-sm">
                        <svg class="svg-icon-color-3" viewBox="0 0 74 74" width="50" xmlns="http://www.w3.org/2000/svg">
                            <path d="m23.8 23.84a1 1 0 0 1 -.294-1.956l5.96-1.84a1 1 0 0 1 .59 1.912l-5.956 1.844a.981.981 0 0 1 -.3.04z" />
                            <path d="m37 43.84a1.009 1.009 0 0 1 -.37-.071l-34-13.561a1 1 0 0 1 .07-1.883l5.29-1.64a1 1 0 0 1 .592 1.91l-2.592.8 31.01 12.368 25.9-10.325a1.015 1.015 0 0 1 .12-.057l4.98-1.981-31-9.593-2.165.669a1 1 0 1 1 -.59-1.912l2.46-.76a1 1 0 0 1 .59 0l34 10.52a1 1 0 0 1 .075 1.884l-7.49 2.982a.95.95 0 0 1 -.12.058l-26.39 10.521a1.009 1.009 0 0 1 -.37.071z" />
                            <path d="m13.069 27.161a1 1 0 0 1 -.3-1.956l5.951-1.841a1 1 0 1 1 .59 1.911l-5.95 1.841a1.013 1.013 0 0 1 -.291.045z" />
                            <path d="m16.8 47.849a1 1 0 0 1 -1-1v-12.064a1 1 0 1 1 2 0v12.064a1 1 0 0 1 -1 1z" />
                            <path d="m57.188 47.849a1 1 0 0 1 -1-1v-12.064a1 1 0 0 1 2 0v12.064a1 1 0 0 1 -1 1z" />
                            <path d="m37 56.239c-11.884 0-21.193-4.123-21.193-9.386a1 1 0 1 1 2 0c0 3.493 7.882 7.386 19.193 7.386s19.193-3.893 19.193-7.386a1 1 0 1 1 2 0c0 5.263-9.309 9.386-21.193 9.386z" />
                            <path d="m63.393 44.387a1 1 0 0 1 -1-1v-10.2l-25.529-3.5a1 1 0 1 1 .272-1.982l26.393 3.615a1 1 0 0 1 .864.991v11.076a1 1 0 0 1 -1 1z" />
                            <path d="m66.406 49.5h-5.687a1 1 0 0 1 -.978-1.211l.736-3.411a3.156 3.156 0 0 1 6.171 0l.736 3.411a1 1 0 0 1 -.978 1.211zm-4.448-2h3.209l-.474-2.2a1.157 1.157 0 0 0 -2.261 0z" />
                        </svg>
                    </div>
                    <h3 class="info__title">Digital Advertiser</h3>
                    <p class="info__text">Eco friendly and cost effective advertising facility which gives maximum benefit to institutions.</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
       END FEATURE AREA
======================================-->
<!--======================================
        START CATEGORY AREA
======================================-->
<section class=" pb-90px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="category-content-wrap">
                    <div class="section-heading">
                        <!-- <h5 class="ribbon ribbon-lg mb-2">Categories</h5> -->
                        <h2 class="section__title">Browse by category</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <!-- <div class="category-btn-box text-right">
                    <a href="categories.html" class="btn theme-btn">All Categories <i class="la la-arrow-right icon ml-1"></i></a>
                </div>end category-btn-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="category-wrapper mt-30px " data-toggle="modal" data-target="#reportModal">
            <div class="row">
                @foreach($category as $cat)
                <div class="col-lg-4 responsive-column-half" data-id="{{$cat->id}}" onclick="changeMyId(this)">
                    <div class="category-item">
                        <img class="cat__img lazy" src="{{asset($cat->image)}}" data-src="{{asset('$cat->image')}}" alt="Category image">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title">{{$cat->name}}</h3>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                @endforeach
                <!-- end col-lg-4 -->
            </div><!-- end category-content -->
        </div><!-- end category-item -->
    </div><!-- end col-lg-4 -->
    </div><!-- end row -->
    </div><!-- end category-wrapper -->
    </div><!-- end container -->
</section>
<!-- end category-area -->
<!-- <section class="about-area section--padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content pb-5">
                    <div class="section-heading">
                        <h5 class="ribbon ribbon-lg mb-2">About us</h5>
                        <h2 class="section__title">Benefits of Learning With Edurators</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry’s when an unknown printerit to make a type specimen book
                            Pellentesque tellus arcu
                        </p>
                    </div> end section-heading -->
                    <!-- end row -->
                    <!-- <div class="btn-box">
                         <a href="about.html" class="btn theme-btn">Learn More <i class="la la-arrow-right icon ml-1"></i></a> -->
                    <!-- </div> -->
                <!-- </div> -->
         <!-- </div> -->
            <!-- <div class="col-lg-5 ml-auto">
                <div class="generic-img-box">
                    <img src="{{asset('frontend/images/img-loading.png')}}" data-src="{{asset('frontend/images/img13.jpg')}}" alt="About image" class="img__item img__item-1 lazy">
                    <img src="{{asset('frontend/images/img-loading.png')}}" data-src="{{asset('frontend/images/img14.jpg')}}" alt="About image" class="img__item img__item-2 lazy">
                </div> -->
            <!-- </div>
        </div>
    </div>
</section>  -->
<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">School</h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach($school as $sc)
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$sc->id)}}" class="d-block">
                            <img class="card-img-top" src="{{asset($sc->image)}}" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <!-- <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6> -->
                        <h5 class="card-title"><a href="{{ route('institute_detail',$sc->id)}}">{{$sc->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$sc->id)}}">{{$sc->address}}</a></p>
                        <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $sc->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $sc->id,
                                    'is_active' => 1,
                                ])->count();
                                if (($sum != 0) && ($count != 0)) {
                                    $average = $sum / $count;
                                } else {
                                    $average = 0;
                                }
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <span class="rating-number"> @php $avg=number_format($average, 1);
                                    @endphp
                                    {{$avg}}</span>
                                @for ($i = 1; $i < $avg; $i++) 
                                <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                                <!-- <span class="star">&#9733;</span> -->
                                    @endfor
                                    @if(is_float($average))
                                    <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                    <span class="rating-total pl-1">{{'('.$count.')'}}</span>
                                    @endif
                                    @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                            </div>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="slider-p max-lines"><?
                             $string = strip_tags(   $sc->short_description);
                             if (strlen($string) > 150) {
                                 // truncate string
                                 $stringCut = substr($string, 0, 150);
                                 $endPoint = strrpos($stringCut, ' ');
                                 //if the string doesn't contain any space then it will cut without word basis.
                                 $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                 $string .= '...';
                             }
                             echo $string;
                             ?></p>
                        </div>
                    </div><!-- end card-body -->
                </div>
                @endforeach
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<!--======================================
======================================-->
<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">Coaching </h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach($coaching as $ch)
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$ch->id)}}" class="d-block">
                            <img class="card-img-top" src="{{asset($ch->image)}}" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <!-- <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6> -->
                        <h5 class="card-title"><a href="{{ route('institute_detail',$ch->id)}}">{{$ch->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$ch->id)}}">{{$ch->address}}</a></p>
                        <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $ch->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $ch->id,
                                    'is_active' => 1,
                                ])->count();
                                if (($sum != 0) && ($count != 0)) {
                                    $average = $sum / $count;
                                } else {
                                    $average = 0;
                                }
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                        <div class="rating-wrap d-flex align-items-center py-2">
                        <div class="rating-wrap d-flex align-items-center py-2">
                        <div class="review-stars">
                               <span class="rating-number"> @php $avg=number_format($average, 1);
                                   @endphp
                                   {{$avg}}</span>
                               @for ($i = 1; $i < $avg; $i++) 
                               <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                               <!-- <span class="star">&#9733;</span> -->
                                   @endfor
                                   @if(is_float($average))
                                   <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                   <span class="rating-total pl-1">{{'('.$count.')'}}</span>
                                   @endif
                                   @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                           </div>
                        </div><!-- end rating-wrap -->
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="slider-p"><?
                             $string = strip_tags(   $ch->short_description);
                             if (strlen($string) > 150) {
                                 // truncate string
                                 $stringCut = substr($string, 0, 150);
                                 $endPoint = strrpos($stringCut, ' ');
                                 //if the string doesn't contain any space then it will cut without word basis.
                                 $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                 $string .= '...';
                             }
                             echo $string;
                             ?></p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<!-- ================================
       START FUN FACT AREA
================================= -->
<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">College </h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach($college as $coll)
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$coll->id)}}" class="d-block">
                            <img class="card-img-top" src="{{asset($coll->image)}}" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <!-- <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6> -->
                        <h5 class="card-title"><a href="{{ route('institute_detail',$coll->id)}}">{{$coll->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$coll->id)}}">{{$coll->address}}</a></p>
                        <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $coll->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $coll->id,
                                    'is_active' => 1,
                                ])->count();
                                if (($sum != 0) && ($count != 0)) {
                                    $average = $sum / $count;
                                } else {
                                    $average = 0;
                                }
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                        <div class="rating-wrap d-flex align-items-center py-2">
                        <div class="review-stars">
                               <span class="rating-number"> @php $avg=number_format($average, 1);
                                   @endphp
                                   {{$avg}}</span>
                               @for ($i = 1; $i < $avg; $i++) 
                               <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                               <!-- <span class="star">&#9733;</span> -->
                                   @endfor
                                   @if(is_float($average))
                                   <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                   <span class="rating-total pl-1">{{'('.$count.')'}}</span>
                                   @endif
                                   @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                           </div>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="slider-p"><?
                             $string = strip_tags(   $coll->short_description);
                             if (strlen($string) > 150) {
                                 // truncate string
                                 $stringCut = substr($string, 0, 150);
                                 $endPoint = strrpos($stringCut, ' ');
                                 //if the string doesn't contain any space then it will cut without word basis.
                                 $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                 $string .= '...';
                             }
                             echo $string;
                             ?></p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<!-- ================================
       START FUNFACT AREA
================================= -->
<section class="hero-area">
    <div class="hero-slider owl-action-styled">
        @foreach($promotionslider as $ps)
        <a href="{{$ps->link}}"><div class="hero-slider-item" style="background-image: url('{{ $ps->image }}');">
            <div class="container">
                <div class="hero-content">
                    <div class="section-heading">
                        <!-- Your section heading content goes here -->
                    </div><!-- end section-heading -->
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        <!-- Your button box content goes here -->
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div></a><!-- end hero-slider-item -->
        @endforeach
    </div>
</section>
<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">Academy </h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach($academy as $ac)
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$ac->id)}}"class="d-block">
                            <img class="card-img-top" src="{{asset($ac->image)}}" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <!-- <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6> -->
                        <h5 class="card-title"><a href="{{ route('institute_detail',$ac->id)}}">{{$ac->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$ac->id)}}">{{$ac->address}}</a></p>
                        <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $ac->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $ac->id,
                                    'is_active' => 1,
                                ])->count();
                                if (($sum != 0) && ($count != 0)) {
                                    $average = $sum / $count;
                                } else {
                                    $average = 0;
                                }
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                        <div class="rating-wrap d-flex align-items-center py-2">
                        <div class="review-stars">
                               <span class="rating-number"> @php $avg=number_format($average, 1);
                                   @endphp
                                   {{$avg}}</span>
                               @for ($i = 1; $i < $avg; $i++) 
                               <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                               <!-- <span class="star">&#9733;</span> -->
                                   @endfor
                                   @if(is_float($average))
                                   <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                   <span class="rating-total pl-1">{{'('.$count.')'}}</span>
                                   @endif
                                   @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                           </div>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="slider-p">
                                <?
                                   $string = strip_tags(  $ac->short_description);
                                   if (strlen($string) > 150) {
                                       // truncate string
                                       $stringCut = substr($string, 0, 150);
                                       $endPoint = strrpos($stringCut, ' ');
                                       //if the string doesn't contain any space then it will cut without word basis.
                                       $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                       $string .= '...';
                                   }
                                   echo $string;
                                    ?>
                              </p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">PG/Hostel </h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach($pg_hostel as $ph)
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$ph->id)}}" class="d-block">
                            <img class="card-img-top" src="{{asset($ph->image)}}" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <!-- <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6> -->
                        <h5 class="card-title"><a href="{{ route('institute_detail',$sc->id)}}">{{$ph->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$sc->id)}}">{{$ph->address}}</a></p>
                        <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $ph->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $ph->id,
                                    'is_active' => 1,
                                ])->count();
                                if (($sum != 0) && ($count != 0)) {
                                    $average = $sum / $count;
                                } else {
                                    $average = 0;
                                }
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                        <div class="rating-wrap d-flex align-items-center py-2">
                        <div class="review-stars">
                               <span class="rating-number"> @php $avg=number_format($average, 1);
                                   @endphp
                                   {{$avg}}</span>
                               @for ($i = 1; $i < $avg; $i++) 
                               <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                               <!-- <span class="star">&#9733;</span> -->
                                   @endfor
                                   @if(is_float($average))
                                   <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                   <span class="rating-total pl-1">{{'('.$count.')'}}</span>
                                   @endif
                                   @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                           </div>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="slider-p"><?
                            $string = strip_tags(  $ph->short_description);
                            if (strlen($string) > 150) {
                                // truncate string
                                $stringCut = substr($string, 0, 150);
                                $endPoint = strrpos($stringCut, ' ');
                                //if the string doesn't contain any space then it will cut without word basis.
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '...';
                            }
                            echo $string;
                             ?></p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">Library </h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                @foreach($library as $lb)
                <div class="card card-item card-preview">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$lb->id)}}" class="d-block">
                            <img class="card-img-top" src="{{asset($lb->image)}}" alt="Card image cap">
                        </a>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <!-- <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">All Levels</h6> -->
                        <h5 class="card-title"><a href="{{ route('institute_detail',$lb->id)}}">{{$lb->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$lb->id)}}">{{$lb->address}}</a></p>
                        <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $lb->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $lb->id,
                                    'is_active' => 1,
                                ])->count();
                                if (($sum != 0) && ($count != 0)) {
                                    $average = $sum / $count;
                                } else {
                                    $average = 0;
                                }
                                $fullStars = floor($average);
                                $halfStar = ceil($average - $fullStars);
                                $emptyStars = $maxRating - ($fullStars + $halfStar);
                                ?>
                        <div class="rating-wrap d-flex align-items-center py-2">
                        <div class="review-stars">
                               <span class="rating-number"> @php $avg=number_format($average, 1);
                                   @endphp
                                   {{$avg}}</span>
                               @for ($i = 1; $i < $avg; $i++) 
                               <i class="bi bi-star-fill" style="color:#f68a03;font-size:10px"></i>
                               <!-- <span class="star">&#9733;</span> -->
                                   @endfor
                                   @if(is_float($average))
                                   <i class="bi bi-star-half" style="color:#f68a03;font-size:10px"></i>
                                   <span class="rating-total pl-1">{{'('.$count.')'}}</span>
                                   @endif
                                   @if($average==0)
                                    @for ($i = 1; $i <= $maxRating; $i++)
                                <i class="bi bi-star" style="color:#f68a03;font-size:10px"></i>
                                @endfor
                                    @endif
                           </div>
                        </div><!-- end rating-wrap -->
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="slider-p"><?
$string = strip_tags( $lb->short_description);
if (strlen($string) > 150) {
    // truncate string
    $stringCut = substr($string, 0, 150);
    $endPoint = strrpos($stringCut, ' ');
    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '...';
}
echo $string;
                            ?></p>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section>
<section class="hero-area">
    <div class="hero-slider owl-action-styled">
        @foreach($promotionslidertwo as $pst)
        <a href="{{$pst->link}}"><div class="hero-slider-item" style="background-image: url('{{ $pst->image }}');">
            <div class="container">
                <div class="hero-content">
                    <div class="section-heading">
                        <!-- Your section heading content goes here -->
                    </div><!-- end section-heading -->
                    <div class="hero-btn-box d-flex flex-wrap align-items-center pt-1">
                        <!-- Your button box content goes here -->
                    </div><!-- end hero-btn-box -->
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div></a><!-- end hero-slider-item -->
        @endforeach
    </div>
</section>
@endsection
