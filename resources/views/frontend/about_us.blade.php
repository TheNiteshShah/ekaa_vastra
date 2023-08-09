
@extends('layouts.frontend.app')
@section('title','home')
@section('content')
<section class="breadcrumb-area section-padding widthmin" style="padding-top:0px;padding-bottom:0px;">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-primary"> About us</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-black generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="{{ route('/')}}">Home</a></li>
                    <li><a href="#">About us</a></li>
                 
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section>
 




    <section class="about-area section--padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content pb-5">
                        <div class="section-heading">
                            <h5 class="ribbon ribbon-lg mb-2">About us</h5>
                            <h2 class="section__title">Benefits of Learning With Edurators</h2>
                            <span class="section-divider"></span>
                            <p class="section__desc" style="text-align: justify;">
                                With the aim of "Let's make the future of education more competitive and qualitative" 'Edurators' has become India's most comprehensive  platform in the field of education. It rates and reviews institutions including  teaching, learning, academia, libraries, campuses and residential setups.These institutions are rated and reviewed by professionals, teachers, alumni, staff, students  and parents who have experienced these institutions earlier through both direct and indirect ways. A person  seeking knowledge can easily choose an institute on this platform after exploring the rating, review, facilities, address, contact details, fee etc. 
                                Moreover we provide a competitive environment to explore the quality education, eco friendly & cost effective advertising service and numerous secondary services also. 
                            </p>
                        </div><!-- end section-heading -->
                      <!-- end row -->
                        <div class="btn-box">
                            <!-- <a href="about.html" class="btn theme-btn">Learn More <i class="la la-arrow-right icon ml-1"></i></a> -->
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-5 ml-auto">
                    <div class="generic-img-box">
                        <img src="{{asset('frontend/images/img-loading.png')}}" data-src="{{asset('frontend/images/img13.jpg')}}" alt="About image" class="img__item img__item-1 lazy">
                        <img src="{{asset('frontend/images/aboutis ing222.jpg')}}" data-src="{{asset('frontend/images/img14.jpg')}}" alt="About image" class="img__item img__item-2 lazy">
                    </div><!-- end generic-img-box -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    
    
    @endsection