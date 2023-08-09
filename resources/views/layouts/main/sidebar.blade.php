<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                @foreach($sidebar1 as $side1)
                <li class="{{str_contains($side1->url, '#')?str_contains(Route::currentRouteName(), $side1->routes) ? 'active' : '' : Route::currentRouteName() == $side1->url ? 'active' : '' }}">
                    <a href="{{str_contains($side1->url, '#')?$side1->url:route($side1->url)}}">
                        <i class="{{$side1->icon}}"></i>
                        <span>
                            {{$side1->name}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sub-menu">
        <div class="scroll">
            <!-- <ul class="list-unstyled" data-link="dashboard">
                <li class="active">
                    <a href="Dashboard.Default.html">
                        <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Analytics.html">
                        <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Ecommerce.html">
                        <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Content.html">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                    </a>
                </li>
            </ul> -->
            @foreach($sidebar1 as $side1)
            @if(str_contains($side1->url, '#'))
            @php
            $admin_sidebar2= App\Models\Backend\AdminSidebar2::OrderBy('seq','asc')->where(array('sidebar1_id'=> $side1->id,'is_active'=>1))->get();
            @endphp
            @if(!empty($admin_sidebar2))
            @foreach($admin_sidebar2 as $side2)
            <ul class="list-unstyled" data-link="{{$side1->name}}" id="{{$side1->name}}">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapse{{$side2->id}}" aria-expanded="true" aria-controls="collapse{{$side2->id}}" class="rotate-arrow-icon opacity-50 collapse ">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">{{$side2->name}}</span>
                    </a>
                    <div id="collapse{{$side2->id}}" class="collapse show">
                        @php
                        $admin_sidebar3= App\Models\Backend\AdminSidebar3::OrderBy('seq','asc')->where(array('sidebar2_id'=> $side2->id,'is_active'=>1))->get();
                        @endphp
                        @if(!empty($admin_sidebar3))
                        <ul class="list-unstyled inner-level-menu">
                            @foreach($admin_sidebar3 as $side3)
                            <li class="{{Route::currentRouteName() == $side3->url ? 'active' : '' }}">
                                <a href="{{route($side3->url)}}">
                                    <i class="{{$side3->icon}}"></i> <span class="d-inline-block">{{$side3->name}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </li>
            </ul>
            @endforeach
            @endif
            @endif
            @endforeach
        </div>
    </div>
</div>