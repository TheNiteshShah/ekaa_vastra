@extends('layouts.frontend.app')
@section('title','home')
@section('content')
<section class="breadcrumb-area section-padding widthmin" style="padding-top:0px;padding-bottom:0px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                <div class="section-heading">
                    <h2 class="section__title text-primary">Contact us</h2>
                </div>
                <ul
                    class="generic-list-item generic-list-item-black generic-list-item-arrow d-flex flex-wrap align-items-center">
                    <li><a href="{{ route('/')}}">Home</a></li>
                    <li>Courses</li>
                    <!-- <li></li> -->
                </ul>
            </div><!-- end breadcrumb-content -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->

<section id="contact" class="contact">

    

    <div class="container" data-aos="fade-up">

        <div class="row mt-5 mb-3">

            <div class="col-lg-4">
                <div class="info p_size">
                    <!-- <div class="address s">
                        <div class="bvb"> 
                            <i class="bi bi-geo-alt as"></i>
                        </div>
                        <div>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div> -->

                    <div class="email s">
                            <div class="bvb">
                                <i class="bi bi-envelope as"></i> 
                            </div>
                            <div>
                                <h4>Email:</h4>
                                <p>privacy@Edurators.com</p>
                            </div>
                    </div>

                    <div class="phone s">
                    <div class="bvb">
                        <i class="bi bi-phone as"></i>
                    </div>
                    <div>
                        <h4>Call:</h4> 
                        <p>09783602628</p>
                        <p>09783602628</p>
                    </div>
                    </div>

                </div>

            </div>


            

            <div class="col-lg-8 mt-5 mt-lg-0">
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

                <form action="{{ route('contact_us_save')}}" method="post" role="form" class="php-email-form">
                {{csrf_field()}}   
                <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                   
                    <div class="text-center"><button class="btn" style="background-color:#395da7;color:white;" type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
@endsection