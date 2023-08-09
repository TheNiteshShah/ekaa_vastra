@extends('layouts.frontend.app')
@section('title','home')
@section('content')
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding bg-light widthmin" style="padding-top:0px;padding-bottom:0px;">
    <!-- <div class="overlay"></div> -->
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="section-heading">
                <h2 class="section__title text-primary">All {{$title}}</h2>
            </div>
            <ul class="generic-list-item generic-list-item-black generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="{{ route('/')}}">Home</a></li>
                <li>Courses</li>
                <li>All {{$title}}</li>
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
<section class="course-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar mb-5">
                    <form action="{{ route('institute_list')}}" id="applyFilter" method="get" enctype="multipart/form-data">
                        <div class="right ">
                            <!-- <span style="cursor:pointer;" onclick="unselect_all()">Clear All -->
                            <span style="cursor:pointer;"><a href="{{url('/institute_list?category_id='.$id.'&state_id='.$state_id.'&district_id='.$district_id.'&city_id='.$city_id.'')}}">Clear All</a>
                            </span> &nbsp;|&nbsp;<span style="cursor: pointer;" onclick="submitFilters()">Apply</span>
                        </div>
                        <input type="hidden" name="category_id" value="{{$id}}">
                        <input type="hidden" name="state_id" value="{{$state_id}}">
                        <input type="hidden" name="district_id" value="{{$district_id}}">
                        <input type="hidden" name="city_id" value="{{$city_id}}">
                        @php
                        $fcategory = App\Models\Backend\Filtercategory::wherenull('deleted_at')->Where(["category_id" => $id, "is_active" => 1])->get();
                        @endphp
                        @foreach($fcategory as $fc)
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="card-title fs-18 pb-2">{{$fc->name}}</h3>
                                <div class="divider"><span></span></div>
                                @php
                                $filter = App\Models\Backend\Filter::wherenull('deleted_at')->Where(["filtercat_id" => $fc->id, "is_active" => 1])->get();
                                @endphp
                                @foreach($filter as $flt)
                                <div class="custom-control custom-checkbox mb-1 fs-15">
                                    <input type="checkbox" class="custom-control-input" id="{{$fc->name.$flt->id}}" name="filter[]" value="{{$flt->id}}" <?php if (!empty($filterdata)) {
                                                                                                                                                                if (in_array($flt->id, $filterdata)) {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                }
                                                                                                                                                            } ?> />
                                    <label class="custom-control-label custom--control-label text-black" for="{{$fc->name.$flt->id}}">
                                        {{$flt->name}}
                                    </label>
                                </div><!-- end custom-control -->
                                @endforeach
                            </div>
                        </div><!-- end card -->
                        @endforeach
                    </form>
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8" style="margin-top: 28px ;">
                @if (count($institute) != 0)
                @foreach($institute as $is)
                <div class="card card-item card-preview card-item-list-layout" data-tooltip-content="#tooltip_content_1">
                    <div class="card-image">
                        <a href="{{ route('institute_detail',$is->id)}}" class="d-block">
                            <img class="card-img-top lazy" src="{{asset($is->image)}}" alt="Card image cap" style="height: auto;">
                        </a>
                        <div class="course-badge-labels">
                            <!-- <div class="course-badge">New</div> -->
                            <!-- <div class="course-badge blue">-39%</div> -->
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('institute_detail',$is->id)}}">{{$is->name}}</a></h5>
                        <p class="card-text"><a href="{{ route('institute_detail',$is->id)}}" class="bi bi-geo-alt-fill">{{$is->address}}</a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <?php
                                $maxRating = 5;
                                $sum = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $is->id,
                                    'is_active' => 1,
                                ])->sum('rating');
                                $count = App\Models\Institute\InstituteReview::where([
                                    'institute_id' => $is->id,
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
                                <span class="rating-number"> @php $avg=number_format($average, 1);
                                    @endphp
                                    {{$avg}}</span>
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
                        </div>
                        <div>
                            <p class="slider-p"><?= $is->short_description ?></p>
                        </div>
                        <div class="d-flex justify-content-center mt-2 align-items-center mt-3">
                            <div style="width: 100% ; text-align: end; ">
                                <a href="{{ route('institute_detail',$is->id)}}" class="card-a-v">View {{$title}}</a>
                                @if(!empty( $is->phone))
                                <a href="{{'tel:+'.$is->phone}}" class="card-a-c"> <span class="bi bi-telephone-fill" style="margin-right: 10px;"></span>Call</a>
                                @else
                                <a href="{{ route('log_in')}}" class="card-a-c"> <span class="bi bi-telephone-fill" style="margin-right: 10px;"></span>Call</a>
                                @endif
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                @endforeach
                @else
                <div class="card card-item card-preview card-item-list-layout" data-tooltip-content="#tooltip_content_1" style="display: flex ;justify-content: center;">
                    <div class="card-image">
                        <img class="card-img-top lazy" src="{{asset('frontend/images/no_data.jpg')}}" alt="No Data Found" style="height: auto;">
                        <h5 class="card-title  text-center">Oops..! No Data Found</h5>
                    </div>
                </div>
                @endif
                <div class="text-center pt-3">
                    <!-- {!! $institute->links() !!} -->
                    @if ($institute->hasPages())
                    {!! $institute->appends(['query' => $institute])->links() !!}
                    <!-- Display pagination links with search query -->
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="scroll-top" class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu" style="border-radius:  10px !important; font: 12px; ">
        <i class="bi bi-funnel"> </i>
    </div>
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <form action="{{ route('institute_list')}}" id="applyFilter" method="get" enctype="multipart/form-data">
                <div class="right ">
                    <!-- <span style="cursor:pointer;" onclick="unselect_all()">Clear All -->
                    <span style="cursor:pointer;"><a href="/institute_list?category_id={{$id}}&state_id={{$state_id}}&district_id={{$district_id}}&city_id={{$city_id}}">Clear All</a>
                    </span> &nbsp;|&nbsp;<span style="cursor: pointer;" onclick="submitFilters()">Apply</span>
                </div>
                <input type="hidden" name="category_id" value="{{$id}}">
                <input type="hidden" name="state_id" value="{{$state_id}}">
                <input type="hidden" name="district_id" value="{{$district_id}}">
                <input type="hidden" name="city_id" value="{{$city_id}}">
                @php
                $fcategory = App\Models\Backend\Filtercategory::wherenull('deleted_at')->Where(["category_id" => $id, "is_active" => 1])->get();
                @endphp
                @foreach($fcategory as $fc)
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-18 pb-2">{{$fc->name}}</h3>
                        <div class="divider"><span></span></div>
                        @php
                        $filter = App\Models\Backend\Filter::wherenull('deleted_at')->Where(["filtercat_id" => $fc->id, "is_active" => 1])->get();
                        @endphp
                        @foreach($filter as $flt)
                        <div class="custom-control custom-checkbox mb-1 fs-15">
                            <input type="checkbox" class="custom-control-input" id="{{$fc->name.$flt->id}}" name="filter[]" value="{{$flt->id}}" <?php if (!empty($filterdata)) {
                                                                                                                                                        if (in_array($flt->id, $filterdata)) {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        }
                                                                                                                                                    } ?> />
                            <label class="custom-control-label custom--control-label text-black" for="{{$fc->name.$flt->id}}">
                                {{$flt->name}}
                            </label>
                        </div><!-- end custom-control -->
                        @endforeach
                    </div>
                </div><!-- end card -->
                @endforeach
            </form>
        </ul>
    </div>
</section>
@endsection
<script>
    document.getElementById('clearall').addEventListener('click', function() {
        alert('hello');
        const checkboxes = document.querySelectorAll('input[name="filter[]"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });
    });
    function submitFilters() {
        document.getElementById("applyFilter").submit();
    }
    function unselect_all() {
        document.querySelectorAll('input[name="filter[]"]')
            .forEach(el => el.checked = false);
        const currentURL = window.location.href;
        // Create a URL object
        const url = new URL(currentURL);
        url.searchParams.delete('filter');
        // Update the browser's address bar with the new URL
        window.history.pushState({}, '', url.toString());
    }
</script>