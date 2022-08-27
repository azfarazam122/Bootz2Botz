@extends('layouts.app')
<style>
    body {
        background-image: linear-gradient(to bottom,
                #ca38dc,
                #f72fae,
                #ff4b87,
                #ff6f6c,
                #f99060);
        background-repeat: no-repeat;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="display-4 mt-4 mb-5 text-center text-white">Welcome Back</p>
                <div class="card col-lg-6 mx-auto">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="p-3">
                            @csrf
                            <div class="text-center mb-5 mt-2">
                                <img style="width: 50%;" class="mx-auto" src="images/logo.png" alt="Bootz2Bitz">
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="fs-5 fw-normal col-form-label ">{{ __('Email') }}</label>

                                <div class="">
                                    <input id="email" type="email" placeholder="Enter Your Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="fs-5 fw-normal col-form-label">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" placeholder="Enter Your Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember me next time') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" style="background: #c231d5;border: #c231d5"
                                        class="col-md-12 btn text-white ">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link col-md-12 text-end" style="color: #e86327"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
