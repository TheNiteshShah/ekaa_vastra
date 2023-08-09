@extends('layouts.main.app')
@section('title',isset($users->id) ? 'Edit Users':'Add Users')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>@if(isset($users->id)) Edit Users @else Add Users @endif</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}"><i class="fas fa-house" aria-hidden="true"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('users.index')}}">All Users</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@if(isset($users->id)) Edit Users @else Add Users @endif</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="tooltip-right-bottom" method="post" action="{{route('users.store')}}" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$users->id}}">
                            	  <label class='form-group has-float-label'>
<input id='name' type='text' class="form-control @error('name') is-invalid @enderror" name='name' value="{{old('name') ? old('name') : $users->name}}" autocomplete='name' autofocus required> 
 @error('name')
<span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
<strong>{{ $message }}</strong>
</span>
@enderror
<span>Name<span style='color:red'> *</span>
</span>
</label>
	  <label class='form-group has-float-label'>
<input id='phone' type='text' class="form-control @error('phone') is-invalid @enderror" name='phone' value="{{old('phone') ? old('phone') : $users->phone}}" autocomplete='phone' autofocus required> 
 @error('phone')
<span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
<strong>{{ $message }}</strong>
</span>
@enderror
<span>Phone<span style='color:red'> *</span>
</span>
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
