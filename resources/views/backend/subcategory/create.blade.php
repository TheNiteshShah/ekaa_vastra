@extends('layouts.main.app')
@section('title','Subcategory')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>@if(isset($subcategory->id)) Edit Subcategory @else Add Subcategory @endif</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('/')}}"><i class="fas fa-house" aria-hidden="true"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('subcategory.index')}}">All Subcategory</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@if(isset($subcategory->id)) Edit Subcategory @else Add Subcategory @endif</li>
                    </ol>
                </nav>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="separator mb-5"></div>
                <div class="card mb-4">
                    <div class="card-body">
                        <form class="tooltip-right-bottom" method="post" action="{{route('subcategory.store')}}" enctype='multipart/form-data'>
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$subcategory->id}}">
                            <div class='form-group has-float-label'>
                                <label for='category_id'>Category <span style='color:red'> *</span></label>
                                <select id='category_id' name='category_id' required class="form-control @error('category_id') is-invalid @enderror">
                                    <option value=''>---Select category-----</option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}" <? if ($cat->id == $subcategory->category_id) {
                                                                    echo "selected";
                                                                } ?>>{{$cat->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <label class='form-group has-float-label'>
                                <input id='name' type='text' class="form-control @error('name') is-invalid @enderror" name='name' value="{{old('name') ? old('name') : $subcategory->name}}" autocomplete='name' autofocus required>
                                @error('name')
                                <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Name<span style='color:red'> *</span>
                                </span>
                            </label>
                            <label class='form-group has-float-label'>
                                <input id='image' type='file' class="form-control @error('image') is-invalid @enderror" name='image' value="{{old('image') ? old('image') : $subcategory->image}}" autocomplete='image' autofocus{{$subcategory->image?'':'required'}}>
                                @if (!empty($subcategory->image))
                                <img src="{{asset($subcategory->image)}}" alt="image" width="100" height="70">
                                @endif
                                @error('image')
                                <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>image @if (empty($subcategory->image))<span style="color:red"> *</span> @endif
                                </span>
                            </label>
                            <label class='form-group has-float-label'>
                                <input id='sequence' type='number' class="form-control @error('sequence') is-invalid @enderror" name='sequence' value="{{old('sequence') ? old('sequence') : $subcategory->sequence}}" autocomplete='sequence' autofocus required>
                                @error('sequence')
                                <span class='invalid-feedback' role='alert' style='color:#dc3545 !important'>
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <span>Sequence<span style='color:red'> *</span>
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