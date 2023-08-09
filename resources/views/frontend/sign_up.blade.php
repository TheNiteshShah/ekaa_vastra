@extends('layouts.frontend.app')
@section('title','home')
@section('content')
<style>
    .multiSelect {
        width: 100%;
        position: relative;
    }
    .multiSelect *,
    .multiSelect *::before,
    .multiSelect *::after {
        box-sizing: border-box;
    }
    .multiSelect_dropdown {
        font-size: 14px;
        min-height: 35px;
        line-height: 35px;
        border-radius: 4px;
        box-shadow: none;
        outline: none;
        background-color: #fff;
        color: #444f5b;
        border: 1px solid #d9dbde;
        font-weight: 400;
        padding: 0.5px 13px;
        margin: 0;
        transition: .1s border-color ease-in-out;
        cursor: pointer;
    }
    .multiSelect_dropdown.-hasValue {
        padding: 5px 30px 5px 5px;
        cursor: default;
    }
    .multiSelect_arrow::before,
    .multiSelect_arrow::after {
        content: '';
        position: absolute;
        display: block;
        width: 2px;
        height: 8px;
        border-radius: 20px;
        border-bottom: 8px solid #99A3BA;
        top: 40%;
        transition: all .15s ease;
    }
    .multiSelect_arrow::before {
        right: 18px;
        -webkit-transform: rotate(-50deg);
        transform: rotate(-50deg);
    }
    .multiSelect_arrow::after {
        right: 13px;
        -webkit-transform: rotate(50deg);
        transform: rotate(50deg);
    }
    .multiSelect_list {
        margin: 0;
        margin-bottom: 25px;
        padding: 0;
        list-style: none;
        opacity: 0;
        visibility: hidden;
        position: absolute;
        max-height: calc(10 * 31px);
        top: 28px;
        left: 0;
        z-index: 9999;
        right: 0;
        background: #fff;
        border-radius: 4px;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        transition: opacity 0.1s ease, visibility 0.1s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.1s ease, visibility 0.1s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        -webkit-transform: scale(0.8) translate(0, 4px);
        transform: scale(0.8) translate(0, 4px);
        border: 1px solid #d9dbde;
        box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.12);
    }
    .multiSelect_option {
        margin: 0;
        padding: 0;
        opacity: 0;
        -webkit-transform: translate(6px, 0);
        transform: translate(6px, 0);
        transition: all .15s ease;
    }
    .multiSelect_option.-selected {
        display: none;
    }
    /* .multiSelect_option:hover .multiSelect_text {
        color: #fff;
        background: #4d84fe;
    } */
    .multiSelect_text {
        cursor: pointer;
        display: block;
        padding: 5px 13px;
        color: #525c67;
        font-size: 14px;
        text-decoration: none;
        outline: none;
        position: relative;
        transition: all .15s ease;
    }
    .multiSelect_list.-open {
        opacity: 1;
        visibility: visible;
        -webkit-transform: scale(1) translate(0, 12px);
        transform: scale(1) translate(0, 12px);
        transition: opacity 0.15s ease, visibility 0.15s ease, -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
        transition: opacity 0.15s ease, visibility 0.15s ease, transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32), -webkit-transform 0.15s cubic-bezier(0.4, 0.6, 0.5, 1.32);
    }
    .multiSelect_list.-open+.multiSelect_arrow::before {
        -webkit-transform: rotate(-130deg);
        transform: rotate(-130deg);
    }
    .multiSelect_list.-open+.multiSelect_arrow::after {
        -webkit-transform: rotate(130deg);
        transform: rotate(130deg);
    }
    .multiSelect_list.-open .multiSelect_option {
        opacity: 1;
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(1) {
        transition-delay: 10ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(2) {
        transition-delay: 20ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(3) {
        transition-delay: 30ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(4) {
        transition-delay: 40ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(5) {
        transition-delay: 50ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(6) {
        transition-delay: 60ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(7) {
        transition-delay: 70ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(8) {
        transition-delay: 80ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(9) {
        transition-delay: 90ms;
    }
    .multiSelect_list.-open .multiSelect_option:nth-child(10) {
        transition-delay: 100ms;
    }
    .multiSelect_choice {
        background: rgba(77, 132, 254, 0.1);
        color: #444f5b;
        padding: 4px 8px;
        line-height: 17px;
        margin: 5px;
        display: inline-block;
        font-size: 13px;
        border-radius: 30px;
        cursor: pointer;
        font-weight: 500;
    }
    .multiSelect_deselect {
        width: 12px;
        height: 12px;
        display: inline-block;
        stroke: #b2bac3;
        stroke-width: 4px;
        margin-top: -1px;
        margin-left: 2px;
        vertical-align: middle;
    }
    /* .multiSelect_choice:hover .multiSelect_deselect {
        stroke: #a1a8b1;
    } */
    .multiSelect_noselections {
        text-align: center;
        padding: 7px;
        color: #b2bac3;
        font-weight: 450;
        margin: 0;
    }
    .multiSelect_placeholder {
        position: absolute;
        left: 20px;
        font-size: 14px;
        top: 8px;
        color: #b8bcbf;
        pointer-events: none;
        transition: all .1s ease;
    }
    .multiSelect_dropdown.-open+.multiSelect_placeholder,
    .multiSelect_dropdown.-open.-hasValue+.multiSelect_placeholder {
        top: -11px;
        left: 17px;
        color: #4073FF;
        font-size: 13px;
    }
</style>
<section class="breadcrumb-area section-padding" style="padding-top:0px;padding-bottom:0px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title  text-primary">Sign Up</h2>
            </div>
            <ul class="generic-list-item generic-list-item-black generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="{{ route('/')}}">Home</a></li>
                <li>Pages</li>
                <li>Sign Up</li>
            </ul>
        </div>
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->
<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area section--padding position-relative">
    <style>
        .btn-group {
            width: 100% !important;
        }
    </style>
    <span class="ring-shape ring-shape-1"></span>
    <span class="ring-shape ring-shape-2"></span>
    <span class="ring-shape ring-shape-3"></span>
    <span class="ring-shape ring-shape-4"></span>
    <span class="ring-shape ring-shape-5"></span>
    <span class="ring-shape ring-shape-6"></span>
    <span class="ring-shape ring-shape-7"></span>
    <div class="container">
        <div class="row">
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
            <div class="col-lg-11 mx-auto">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title text-center fs-24 lh-35 pb-4" style="font-size: 31px !important;">Register as Institute!</h3>
                        <div class="section-block"></div>
                        <div class="card-body">
                            <form class="tooltip-right-bottom" method="post" action="{{route('institute_stored')}}" enctype='multipart/form-data'>
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$institute->id}}">
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>Name<span style='color:red'> *</span>
                                            <input id='name' type='text' class="form-control @error('name') is-invalid @enderror" name='name' value="{{old('name') ? old('name') : $institute->name}}" autocomplete='name' autofocus required>
                                            @error('name')
                                            <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>Email<span style='color:red'> *</span>
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name='email' value="{{old('email') ? old('email') : $institute->email}}" autocomplete='email' autofocus required>
                                        </span>
                                    </div>
                                </div>
                                <!-- <div class='form-group has-float-div'>
                                </div>
                                <div class='form-group has-float-div'>
                                    <span>Password<span style='color:red'> *</span>
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name='password' value="{{old('password') ? old('password') : $institute->password}}" autocomplete='password' autofocus required>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-12 form-group has-float-div">
                                        <span>Address<span style='color:red'> *</span>
                                            <input id='address' type='text' class="form-control @error('address') is-invalid @enderror" name='address' value="{{old('address') ? old('address') : $institute->address}}" autocomplete='address' autofocus required>
                                            @error('address')
                                            <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <div for='state_id'>State <span style='color:red'> *</span></div>
                                        <select id='state_ids' name='state_id' required class="form-control @error('state_id') is-invalid @enderror" data-url="city_addfront/">
                                            <option value="">----Select--</option>
                                            @foreach($state as $st)
                                            <option value="{{$st->id}}" @if ($st->id ==$institute->state_id) selected @endif>{{$st->state_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <div for='city_id'>District<span style='color:red'> *</span></div>
                                        <select id='city_ids' name='city_id' required class="form-control @error('city_id') is-invalid @enderror" data-url="pincode_addfront/">
                                            @if(!empty( $institute->district_id)){
                                            @foreach($city as $cc)
                                            <option value="{{$cc->id}}" @if($cc->id == $institute->district_id)
                                                selected
                                                @endif
                                                >{{$cc->district_name}}</option>
                                            @endforeach
                                            }
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>City<span style='color:red'>*</span>
                                            <select id='pincodes' name='pincode' required class="form-control">
                                                @if(!empty( $institute->city_id))
                                                @foreach($pincode as $pn)
                                                <option value="{{$pn->id}}" @if($pn->id==$institute->city_id) {{'selected'}} @endif>{{$pn->city}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <div for='Category'>Category <span style='color:red'> *</span></div>
                                        <select id='category_id' name='category_id' required data-width="100%" class="form-control" data-url="filtercat_selectfront/">
                                            <option value="">----Select--</option>
                                            @foreach($Category as $cat)
                                            <option value="{{$cat->id}}" @if ($cat->id ==$institute->category_id) selected @endif>{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>Stream<span style='color:red'>*</span>
                                            <div class="multiSelect">
                                                <select multiple class="multiSelect_field" id="stream_id" name="stream_id[]">
                                                </select>
                                            </div>
                                            <!-- <span>Stream<span style='color:red'>*</span>
                                            <select class="form-control select2-multiple multiSelect_field" id="stream_id" multiple data-width="100%" name="stream_id[]" required data-url="fees_addfront/">
                                                @if(!empty( $institute->stream_id))
                                                @php $strdata=json_decode($institute->stream_id);@endphp
                                                @foreach($stream as $st)
                                                <option value="{{$st->id}}" {{ in_array($st->id, $strdata) ? 'selected' : '' }}>{{$st->name}}</option>
                                                @endforeach
                                                @endif
                                            </select> -->
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <span>Filter<span style='color:red'>*</span>
                                            <select class="form-control select2-multiple" multiple="multiple" id="filter_id" data-width="100%" name="filter_id[]" required>
                                                @if(!empty( $institute->filter_id))
                                                @php $filterdata=json_decode($institute->filter_id);@endphp
                                                @foreach($filter as $fl)
                                                <option value="{{$fl->id}}" {{ in_array($fl->id, $filterdata) ? 'selected' : '' }}>{{$fl->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                            <!-- <span>Filter<span style='color:red'>*</span>
                                       <div class="multiSelect">
                                        <select multiple class="multiSelect_field" id="filter_id" name="filter_id[]">
                                        </select>
                                       </div> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>Image @if (empty($institute->image))<span style="color:red"> *</span> @endif
                                        </span>
                                        <input id='image' type='file' class="form-control @error('image') is-invalid @enderror" name='image' value="{{old('image') ? old('image') : $institute->image}}" autocomplete='image' autofocus{{$institute->image?'':'required'}}>
                                        @if (!empty($institute->image))
                                        <img src="{{asset($institute->image)}}" alt="image" width="100" height="70">
                                        @endif
                                        @error('image')
                                        <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <span>Phone<span style='color:red'> *</span>
                                            <input id='phone' type='text' class="form-control @error('phone') is-invalid @enderror" name='phone' maxlength="10" value="{{old('phone') ? old('phone') : $institute->phone}}" autocomplete='phone' autofocus required>
                                            @error('phone')
                                            <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <div for='gender'>Gender <span style='color:red'> *</span></div>
                                        <select id='gender' name='gender' required class="form-control @error('gender') is-invalid @enderror">
                                            <option value="">--Select----</option>
                                            <option value="Boys" @if ($institute->gender=='Boys') selected @endif>Boys</option>
                                            <option value="Girls" @if ($institute->gender=='Girls') selected @endif>Girls</option>
                                            <option value="Co-Ed" @if ($institute->gender=='Co-Ed') selected @endif>Co-Ed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <span>Medium<span style='color:red'>*</span>
                                            <select class="form-control select2-multiple" multiple="multiple" data-width="100%" name="medium[]" id="medium" required>
                                                <option value="">---Select---</option>
                                                @if(!empty( $institute->medium))
                                                @php $medium=json_decode($institute->medium);
                                                @endphp
                                                @else
                                                @php $medium=[];@endphp
                                                @endif
                                                <option value="Hindi" @php if(in_array('Hindi', $medium)) echo 'selected' ; @endphp>Hindi</option>
                                                <option value="English" @php if(in_array('English', $medium)) echo 'selected' ; @endphp>English</option>
                                                <option value="Other" @php if(in_array('Other', $medium)) echo 'selected' ;@endphp>Other</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>Fees Structure @if (empty($institute->fees_structure))<span style="color:red"> *</span> @endif
                                            <input id='fees_structure' type='file' class="form-control @error('fees_structure') is-invalid @enderror" name='fees_structure' value="{{old('fees_structure') ? old('fees_structure') : $institute->fees_structure}}" autocomplete='fees_structure' autofocus{{$institute->fees_structure?'':'required'}}>
                                            @if (!empty($institute->fees_structure))
                                            <img src="{{asset($institute->fees_structure)}}" alt="fees_structure" width="100" height="70">
                                            @endif
                                            @error('fees_structure')
                                            <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <span>Fees Structure PDF @if (empty($institute->fees_structure_pdf))<span style="color:red"> *</span> @endif
                                            <input id='fees_structure_pdf' type='file' class="form-control @error('fees_structure_pdf') is-invalid @enderror" name='fees_structure_pdf' value="{{old('fees_structure_pdf') ? old('fees_structure_pdf') : $institute->fees_structure_pdf}}" autocomplete='fees_structure_pdf' autofocus{{$institute->fees_structure_pdf?'':'required'}}>
                                            @if (!empty($institute->fees_structure_pdf))
                                            <a href='{{asset($institute->fees_structure_pdf)}}' target="_blank">PDF</a>
                                            @endif
                                            @error('fees_structure_pdf')
                                            <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class='form-group has-float-div'>
                                </div>
                                <div class='form-group has-float-div'>
                                    <span>Description<span style='color:red'>*</span>
                                        <textarea name="description" id="description" required class="form-control">{{old('description') ? old('description') : $institute->description}}</textarea>
                                        @error('description')
                                        <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </span>
                                </div>
                                <div class='form-group has-float-div'>
                                    <span>Short Description<span style='color:red'> </span>
                                        <textarea name="short_description" id="short_description" class="form-control">{{old('short_description') ? old('short_description') : $institute->short_description}}</textarea>
                                        @error('short_description')
                                        <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group has-float-div mt-3 mt-md-0">
                                        <span>Payment Image @if (empty($institute->payment_image))<span style="color:red"> *</span> @endif
                                            <input id='payment_image' type='file' class="form-control @error('payment_image') is-invalid @enderror" name='payment_image' value="{{old('payment_image') ? old('payment_image') : $institute->payment_image}}" autocomplete='payment_image' autofocus{{$institute->payment_image?'':'required'}}>
                                            @if (!empty($institute->payment_image))
                                            <img src="{{asset($institute->payment_image)}}" alt="payment_image" width="100" height="70">
                                            @endif
                                            @error('payment_image')
                                            <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 form-group has-float-div">
                                        <div class="w-100 text-center">
                                            <img src="{{asset('frontend/images/qr.png')}}" alt="Qr Code" class="img-fluid" style="width:30%">
                                            <h5>Registration Fees: ₹{{FEES}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn theme-btn" type="submit">Register Account <i class="la la-arrow-right icon ml-1"></i></button>
                            </form>
                            <!-- <form action="{{ route('contact_us_save')}}" method="post" role="form" class="php-email-form">
                {{csrf_field()}}   
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button class="btn" style="background-color:#395da7;color:white;" type="submit">Send Message</button></div>
                </form> -->
                        </div>
                    </div><!-- end btn-box -->
                    </form>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end col-lg-7 -->
    </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end contact-area -->
<script>
    const htmlEditor = ['short_description', 'description'];
</script>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script>
    //=================== Start Get District ===================
    $(document).ready(function() {
        $("#state_ids").change(function() {
            var vf = $(this).val();
            var path = $(this).data('url');
            if (vf == "") {
                return false;
            } else {
                $('#city_ids option').remove();
                var opton = "<option value=''>Please Select </option>";
                $.ajax({
                    url: path + vf,
                    data: '',
                    type: "get",
                    success: function(html) {
                        if (html != "NA") {
                            var s = jQuery.parseJSON(html);
                            $.each(s, function(i) {
                                opton += '<option value="' + s[i]['district_id'] + '">' + s[i]['district_name'] + '</option>';
                            });
                            $('#city_ids').append(opton);
                        } else {
                            alert('No District Name Found');
                            return false;
                        }
                    }
                })
            }
        })
    });
    //=================== End Get District ===================
    //=================== Start Get City ===================
    $(document).ready(function() {
        $("#city_ids").change(function() {
            var vf = $(this).val();
            var path = $(this).data('url');
            if (vf == "") {
                return false;
            } else {
                $('#pincodes option').remove();
                var opton = "<option value=''>Please Select </option>";
                $.ajax({
                    url: path + vf,
                    data: '',
                    type: "get",
                    success: function(html) {
                        if (html != "NA") {
                            var s = jQuery.parseJSON(html);
                            $.each(s, function(i) {
                                opton += '<option value="' + s[i]['city_id'] + '">' + s[i]['city'] + '</option>';
                            });
                            $('#pincodes').append(opton);
                        } else {
                            alert('No City Found');
                            return false;
                        }
                    }
                })
            }
        })
    });
    //=================== End Get City ===================
    //=================== Start Get Stream ===================
    $(document).ready(function() {
        $("#category_id").change(function() {
            var vf = $(this).val();
            var path = $(this).data('url');
            if (vf == "") {
                return false;
            } else {
                $('#stream_id option').remove();
                var opton = "<option value=''>Please Select </option>";
                $.ajax({
                    url: path + vf,
                    data: '',
                    type: "get",
                    success: function(html) {
                        if (html != "NA") {
                            var s = jQuery.parseJSON(html);
                            $.each(s, function(i) {
                                opton += '<option value="' + s[i]['stream_id'] + '">' + s[i]['stream_name'] + '</option>';
                            });
                            $('#stream_id').append(opton).multiselect("destroy").multiselect();
                        } else {
                            alert('No Stream  Data Found');
                            return false;
                        }
                    }
                })
            }
        })
    });
    //=================== End Get Stream ===================
    //===================  Get Filter Category ===================
    $(document).ready(function() {
        $("#category_id").change(function() {
            var vf = $(this).val();
            var path = 'get_filter_cat/';
            if (vf == "") {
                return false;
            } else {
                $('#filter_id option').remove();
                var opton = "<option value=''>Please Select </option>";
                $.ajax({
                    url: path + vf,
                    data: '',
                    type: "GET",
                    success: function(html) {
                        if (html != "NA") {
                            var s2 = jQuery.parseJSON(html);
                            $.each(s2, function(i) {
                                opton += '<option value="' + s2[i]['filter_id'] + '">' + s2[i]['filter_name'] + '</option>';
                            });
                            $('#filter_id').append(opton).multiselect("destroy").multiselect();
                            // $("#filter_id").append(opton).multiselect("refresh");
                        } else {
                            alert('No  Filter  Data Found');
                            return false;
                        }
                    }
                })
            }
        })
    });
</script>