@extends('layouts.frontend.app')
@section('title','home')
@section('content')
 <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-white">All School</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="index.html">Home</a></li>
                    <li>Courses</li>
                    <li>All School</li>
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->



    <section> 
        <div class="container" style="margin-top: 20px;">
           
                <div class=" responsive-column-half" data-toggle="modal" data-target="#reportModal" style="text-align: end;">
                    <button class="model-btmmm">Change location</button>
                 </div>
         
        </div>


    </section>

      <!-- <span style="font-size:30px;cursor:pointer" class="tgo" onclick="openNav()">&#9776; </span> -->

    <section class="course-area section--padding" style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar mb-5">
                     <!-- end card -->
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">Medium-Board</h3>
                                <div class="divider"><span></span></div>
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox" required>
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox">
                                        Cbes
                                    </label>
                                </div><!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox2" required>
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox2">
                                        Ices
                                    </label>
                                </div><!-- end custom-control -->
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="catCheckbox3" required>
                                    <label class="custom-control-label custom--control-label text-black"
                                        for="catCheckbox3">
                                        State Board
                                    </label>
                                </div><!-- end custom-control -->
                                <!-- end custom-control -->
                                <!-- end collapse -->

                            </div>
                        </div><!-- end card -->


               


































                    
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                            
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>
                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->

                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>


                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>
                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>
                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>

                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->



                    </div>
                    <div class="card card-item card-preview card-item-list-layout"
                        data-tooltip-content="#tooltip_content_1">
                        <div class="card-image">
                            <a href="course-details.html" class="d-block">
                                <img class="card-img-top lazy" src="images/school1.svg" alt="Card image cap"
                                    style="height: auto;">
                            </a>
                            <div class="course-badge-labels">
                                <div class="course-badge">New</div>
                                <!-- <div class="course-badge blue">-39%</div> -->
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">School</a></h5>
                            <p class="card-text"><a href="#" class="bi bi-geo-alt-fill">58, Lane 2, Gopalbari, Jaipur,
                                    Rajasthan</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <!-- <span class="rating-total pl-1">(20,230)</span> -->
                            </div>
                            <div>
                                <p class="slider-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit dolore doloremque suscipit, commodi numquam libero facilis officiis in cum! Placeat omnis ab vel error? Laborum voluptatem quos nisi eaque commodi.</p>
                            </div>

                            <div class="d-flex justify-content-center mt-2 align-items-center mt-3">

                                <div style="width: 100% ; text-align: end; ">
                                    <a href="#" class="card-a-v">View School</a>
                                    <a href="#" class="card-a-c"> <span class="bi bi-telephone-fill"
                                        style="margin-right: 10px;"></span>Call</a>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>

                    <div class="text-center pt-3">
                        <nav aria-label="Page navigation example" class="pagination-box">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="fs-14 pt-2">Showing 1-10 of 56 results</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    @endsection