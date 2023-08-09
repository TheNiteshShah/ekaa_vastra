@extends('layouts.main.app')
@section('title','Account')
@section('content')
<!-- //start  -->
<main>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-6 card" style="margin:0px auto;">
                <div class="w-100">
                    <a href="{{route('admin_updateform') }}" class="float-right" title="Update Profile"> <button type="button" class="btn btn-primary btn-sm  my-2"> <i class="simple-icon-pencil"></i> Edit Profile</button></a>
                </div>

                <div class="mb-4">
                    <img src="{{asset($data->image)}}" alt="Profile Picture" class="card-img-top" style="height:300px;width:300px;"/>
                    <h1>{{$data->name}}</h1>
                    <!-- <div class="position-absolute card-top-buttons"> -->
                    <br />
                    <!-- <a href="{{route('institute.updateform') }}" class="btn btn-outline-orange icon-button" title="Update Profile">
                                    <i class="simple-icon-pencil"></i>
                                </a> -->
                    <!-- </div> -->
                </div>
            </div>
</div>
        <div class="row">
                <div class="col-6 card" style="margin:0px auto;">
                    <h5 class="mb-2">Email</h5>
                    <p class="mb-3">{{$data->email}}</p>
                    <h5 class="mb-2">Phone</h5>
                    <p class="mb-3">{{$data->phone}}</p>
                    <h5 class="mb-2">Address</h5>
                    <p class="mb-3">{{$data->address}}</p>
                    <h5 class="mb-2">Position</h5>
                    <p class="mb-3">
                    @switch($data->power)
                                @case(1)
                                <span class="badge badge-pill badge-success mb-1">Super Admin</span>
                                @break
                                @case(2)
                                <span class="badge badge-pill badge-primary mb-1">Admin</span>
                                @break
                                @case(3)
                                <span class="badge badge-pill badge-info mb-1">Manager</span>
                                @break
                                @default
                                <span>-</span>
                                @endswitch
                    </p>
                    <h5 class="mb-2">Permissions</h5>
                    <p class="mb-3">
                    @php $arr = json_decode($data->services)@endphp
                                @foreach($arr as $a)
                                @if($a==999)
                                <span class="badge badge-pill badge-outline-primary mb-1">All</span>
                                @else
                                @php
                                $admin_sidebar= App\Models\Backend\AdminSidebar1::where(array('id'=> $a,'is_active'=>1))->first();
                                @endphp
                                <span class="badge badge-pill badge-outline-primary mb-1">{{$admin_sidebar->name}}</span>
                                @endif
                                @endforeach
                    </p>

                </div>


            </div>
        
        </div>

</main>
@endsection