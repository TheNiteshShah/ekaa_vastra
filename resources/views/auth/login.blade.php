@extends('layouts.authentication.app')
@section('title','login')
@section('content')
<body class="background show-spinner no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">
                            <p class=" text-white h2">MAGIC IS IN THE DETAILS</p>
                            <p class="white mb-0">
                                Please use your credentials to login.
                                <br>If you are not a member, please
                                <a href="#" class="white">register</a>.
                            </p>
                        </div>
                        <div class="form-side text-center">
                            <a href="{{route('admin.login') }}">
                                <!-- <span class="logo-single"></span> -->
                                <!-- <h1 class=""><b>Edurators</b></h1> -->
                                                               <img src="{{asset('backend/logos/ekaa.png')}}" style="width: 80px;
    margin-bottom: 10px;">
                                

                            </a>
                            <h6 class="mb-4">Login</h6>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label class="form-group has-float-label mb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span>E-mail</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert" style="color:#dc3545 !important">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span>Password</span>
                                </label>
                                <div class="d-flex justify-content-between align-items-center">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forget password?</a>
                                    @endif
                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection