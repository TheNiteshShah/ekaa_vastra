@extends('layouts.main.app')
@section('title',isset($slider->id) ? 'Edit Slider':'Add Slider')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>@if(isset($slider->id)) Edit Slider @else Add Slider @endif</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}"><i class="fas fa-house" aria-hidden="true"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('web_slider.index')}}">All Slider</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@if(isset($slider->id)) Edit Slider @else Add Slider @endif</li>
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="tooltip-right-bottom" method="post" action="{{route('web_slider.store')}}" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$slider->id}}">
                            <label class='form-group has-float-label'>
                                <input id='image' type='file' class="form-control @error('image') is-invalid @enderror" name='image' value="{{old('image') ? old('image') : $slider->image}}" autocomplete='image' autofocus {{$slider->image?'':'required'}}>
                                @if (!empty($slider->image))
                                <img src="{{asset($slider->image)}}" alt="image" width="100" height="70">
                                @endif
                                @error('image')
                                <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Image @if (empty($slider->image))<span style="color:red"> *</span> @endif
                                </span>
                            </label>
                            <label class='form-group has-float-label'>
                                <input id='link' type='text' class="form-control @error('link') is-invalid @enderror" name='link' value="{{old('link') ? old('link') : $slider->link}}" autocomplete='link' autofocus required>
                                @error('link')
                                <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Link<span style='color:red'> *</span>
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