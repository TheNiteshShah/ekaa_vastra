@extends('layouts.main.app')
@section('title','Category')
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
                <h1>View All Category</h1>
                <div class="top-right-button-container">
                    <a href="{{route('category.create')}}"><button type="button" class="btn btn-primary btn-sm mb-1 mr-4">Add Category</button></a>
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
                            <a href="{{route('/')}}"><i class="fas fa-house" aria-hidden="true"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View All Category</li>
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
                            <th>Sno</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Sequence</th>

                            <th>Status</th>
                            <th>Action</th>
                            <!-- <th class="empty"> </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->name }} </td>


                            <td>
                                @if (!empty($data->image))
                                <img src="{{asset($data->image)}}" alt="{{$data->image}}" width="100" height="70">
                                @else
                                No Image Found!
                                @endif
                            </td>


                            <td>{{$data->sequence }} </td>

                            <!-- ========== Status check ================== -->
                            <td>
                                <div class="form-group row mb-1">
                                    <!-- <label class="col-12 col-form-label">{{$data->is_active==1?'Active':'Inactive'}}</label> -->
                                    <div class="col-12">
                                        <div class="custom-switch custom-switch-primary mb-2 custom-switch-small" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{$data->is_active==1?'Inactive':'Active'}}">
                                            <input name="status" class="custom-switch-input" id="status{{$data->id}}" data-id="{{ $data->id }}" data-url="category/update/" type="checkbox" @if($data->is_active)checked="checked" @endif>
                                            <label class="custom-switch-btn" for="status{{$data->id}}"></label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <!-- ========== Start Edit button ================== -->

                                <div class="dropdown d-inline-block">
                                    <a class="btn btn-outline-primary dropdown-toggle mb-1" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action

                                    </a>

                                    <div class="dropdown-menu px-3" aria-labelledby="dropdownMenuLink">

                                        @if (Auth::user()->power == 1) <li class="li"><a href="{{route('category.edit', $data->id)}}"><i class="fas fa-pencil" aria-hidden="true" style="font-size: 18px;"></i><strong class="ml-2">Edit</strong></a></li>@endif

                                        @if (Auth::user()->power != 3)<li class="li"> <a style="cursor: pointer" name="delete" id="delete{{$data->id}}" data-url="category/destroy/" data-id="{{ $data->id }}" role="button"><i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;cursor: pointer;"></i><strong class="ml-2">Delete</strong></a></li>@endif

                                    </div>
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
            data: "Sno"
        },
        {
            data: "Name"
        }, {
            data: "Image"
        }, {
            data: "Sequence"
        },
        {
            data: "Status"
        },
        {
            data: "Action"
        },
        //   { data: "Check" }
    ];
</script>
@endsection