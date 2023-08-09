@extends('layouts.main.app')
@section('title',isset($teams->id) ? 'Edit Team':'Add Team')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>@if(isset($teams->id)) Edit Team @else Add Team @endif</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}"><i class="fas fa-house" aria-hidden="true"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('team.index')}}">All Teams</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@if(isset($teams->id)) Edit Team @else Add Team @endif</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="tooltip-right-bottom" method="post" action="{{route('team.store')}}" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$teams->id}}">
                            <label class="form-group has-float-label">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name') ? old('name') : $teams->name}}" autocomplete="name" autofocus required>
                                @error('name')
                                <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Name<span style="color:red"> *</span></span>
                            </label>
                            <label class="form-group has-float-label">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email') ? old('email') : $teams->email}}" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>E-mail<span style="color:red"> *</span></span>
                            </label>
                            @if(!isset($teams->id))
                            <label class="form-group has-float-label">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password') ? old('password') : $teams->password}}" autocomplete="password" autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Password<span style="color:red"> *</span></span>
                            </label>
                            @endif
                            <label class="form-group has-float-label">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone') ? old('phone') : $teams->phone}}" autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Phone<span style="color:red"> *</span></span>
                            </label>
                            <label class="form-group has-float-label">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{old('address') ? old('address') : $teams->address}}" autocomplete="address" autofocus>
                                @error('address')
                                <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Address</span>
                            </label>
                            <div class="form-group has-float-label">
                                <label for="power">Permission Level <span style="color:red"> *</span></label>
                                <select id="power" name="power" required class="form-control @error('password') is-invalid @enderror">
                                    <option selected>Choose...</option>
                                    <option value="1" @if($teams->power==1 || old('power') ==1 ) selected @endif>Super Admin</option>
                                    <option value="2" @if($teams->power==2 || old('power') ==2) selected @endif>Admin</option>
                                    <option value="3" @if($teams->power==3 || old('power') ==3) selected @endif>Manager</option>
                                </select>
                            </div>
                            @error('power')
                            <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="services">Services<span style="color:red"> *</span></label>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox"  name="services[]" class="custom-control-input @error('password') is-invalid @enderror" value="999" id="all">
                                <label class="custom-control-label" for="all">All</label>
                            </div>
                            @foreach($adminSidebar1 as $data)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" name="services[]" class="custom-control-input @error('password') is-invalid @enderror" value="{{$data->id}}" id="sidebar1{{$data->id}}">
                                <label class="custom-control-label" for="sidebar1{{$data->id}}">{{$data->name}}</label>
                            </div>
                            @endforeach
                            @error('services')
                            <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="form-group has-float-label">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" autofocus>
                                @error('image')
                                <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Image</span>
                            </label>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
                <user></user>
            </div>
        </div>
    </div>
</main>
@endsection