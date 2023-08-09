@extends('layouts.main.app')
@section('title','Contact Us')
@section('content')
<main>
    <!-- ========== start show message ================== -->
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show rounded " role="alert">
        <strong>Alert !</strong> {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">Ã—</span>
        </button>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show rounded " role="alert">
        <strong>Alert !</strong> {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">Ã—</span>
        </button>
    </div>
    @endif
    <!-- ========== start show message ================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>View All Contact Us</h1>
                <div class="top-right-button-container">
                    <!-- <a href="{{route('contactus.create')}}"><button type="button" class="btn btn-primary btn-sm mb-1 mr-4">Add Contactus</button></a> -->
                    <div class="btn-group">
                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            EXPORT
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id="dataTablesCopy" href="#">Copy</a>
                            <a class="dropdown-item" id="dataTablesExcel" href="#">Excel</a>
                            <a class="dropdown-item" id="dataTablesCsv" href="#">Csv</a>
                            <a class="dropdown-item" id="dataTablesPdf" href="#">Pdf</a>
                        </div>
                    </div>
                </div>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}"><i class="fas fa-house" aria-hidden="true"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View All Contact Us</li>
                    </ol>
                </nav>
                <div class="mb-2">
                    <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                        Display Options
                        <i class="simple-icon-arrow-down align-middle"></i>
                    </a>
                    <div class="collapse dont-collapse-sm" id="displayOptions">
                        <div class="d-block d-md-inline-block">
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                <input class="form-control" placeholder="Search Table" id="searchDatatable">
                            </div>
                        </div>
                        <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                            <span class="text-muted text-small">Displaying 1-10 of 40 items </span>
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                10
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">5</a>
                                <a class="dropdown-item active" href="#">10</a>
                                <a class="dropdown-item" href="#">20</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                <table id="datatableRows" class="data-table responsive nowrap">
                    <thead>
                        <tr>
                            <th>S. No.</th>
                            <th>Name</th>
                            <th>institute Name</th>
                            <th>User Name</th>
                            <th>Message</th>
                            <th>Subject</th>
                        
                            <th>email</th>
                            <th>Action</th>
                            <!-- <th class="empty"> </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contactus as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->name }} </td>
                            <td>
                                @php
                                $ins_id=$data->institute_id;
                                $institute = App\Models\Backend\Institute::where('id',$ins_id)->first();
                                @endphp
                                @if(!empty(  $institute)){{ $institute->name}} @endif

                               
                            </td>
                            <td>
                                @php
                                $user_id=$data->user_id;
                                $user = App\Models\Backend\Users::where('id',$user_id)->first();
                                @endphp
                                @if(!empty(  $user)) {{$user->name}}  @endif

                           
                            </td>
                            <td>{{$data->message }} </td>
                            <td>{{$data->subject }} </td>
                           
                            <td>{{$data->email }} </td>
                            <!-- ========== Status check ================== -->
                            <td>
                                <!-- ========== Start Edit button ================== -->
                                <!-- @if (Auth::user()->power == 1) <a  href="{{route('contactus.edit', $data->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil" aria-hidden="true" style="font-size: 18px;"></i></a>@endif -->
                                <!-- ========== Start Delete Button ================== -->
                                <div class="dropdown d-inline-block">
                                    <a class="btn btn-outline-primary dropdown-toggle mb-1" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </a>
                                    <div class="dropdown-menu px-3" aria-labelledby="dropdownMenuLink">
                                        @if (Auth::user()->power != 3)<li class="li"> <a style="cursor: pointer" class="ml-1" name="delete" id="delete{{$data->id}}" data-url="contactus/destroy/" data-id="{{ $data->id }}" role="button" ><i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;cursor: pointer;"></i><strong class="ml-2">Delete</strong></a></li>@endif
                                    </div>
                            </td>
                            <!-- <td>
                                            <label class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<script>
    const column = [{
            data: "S. No."
        },
        {
            data: "name"
        }, 
        {
            data: "Institute Name"
        }, 
        {
            data: "User Name"
        }, 
        {
            data: "message"
        },
        {
            data: "subject"
        },
        {
            data: "email"
        },
        // {
        //     data: "Status"
        // },
        {
            data: "Action"
        },
        //   { data: "Check" }
    ];
</script>
@endsection
<style>
    .li{
    margin-top: 10px;
}
</style>