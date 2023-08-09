@extends('layouts.frontend.app')
@section('title','home')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding" style="padding-top:0px;padding-bottom:0px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title" style="color:#395da7">Login</h2>
            </div>
            <ul class="generic-list-item generic-list-item-black generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="{{ route('/')}}">Home</a></li>
                <li>Pages</li>
                <li>Login</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding position-relative">
    <span class="ring-shape ring-shape-1"></span>
    <span class="ring-shape ring-shape-2"></span>
    <span class="ring-shape ring-shape-3"></span>
    <span class="ring-shape ring-shape-4"></span>
    <span class="ring-shape ring-shape-5"></span>
    <span class="ring-shape ring-shape-6"></span>
    <span class="ring-shape ring-shape-7"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                
           
            

                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title text-center fs-24 lh-35 pb-4">Login to Your Account!</h3>
                        <div class="section-block"></div>
                        <form method="post" action="javascript:void(0)" id="loginForm" enctype="multipart/form-data" class="pt-4">
                        {{csrf_field()}}   
                       
                            
                            <div class="input-box">
                                <label class="label-text">Phone Number</label>
                                
                            <div class="form-group">
                                <input name="phone" required type="text" id="loginPhone"  class="form-control rounded-0" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" placeholder="Enter Your Number">
                                <input type="hidden" id="loginverify" value="0" name="loginverify" />
                            </div>
                            <div class="form-group hidden-OTP-field" style="display:none;">
                            <label class="label-text">OTP Code</label>
                                <input name="otp" id="loginOTP" class="form-control rounded-0" type="text" onkeypress="return isNumberKey(event)" maxlength="6" minlength="6" placeholder="Enter OTP">
                            </div>
                            <div id="timer"></div>
                            </div>
                         


                            <div class="btn-box">
                                <div class="d-flex align-items-center justify-content-between pb-4">
                                    <div class="custom-control custom-checkbox fs-15">
                                        <!-- <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox" required> -->
                                        <!-- <label class="custom-control-label custom--control-label" for="rememberMeCheckbox">Remember Me</label> -->
                                    </div><!-- end custom-control -->
                                    <!-- <a href="recover.html" class="btn-text">Forgot my password?</a> -->
                                </div>
                                <button class="btn theme-btn" type="submit" onclick="openotp()">Login Account <i class="la la-arrow-right icon ml-1"></i></button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
       END CONTACT AREA
================================= -->
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
@endsection


