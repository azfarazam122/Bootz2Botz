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
            <div class="col-md-8 mb-5">
                <p class="display-4 mt-4  text-center text-white">Get Started</p>
                <div class="text-center mb-5">
                    <small class="text-light " style="letter-spacing: 2px">Signup and Start Using AI Model Market
                        Place</small>
                </div>
                <div class="card col-lg-8 mx-auto">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="p-3">
                            @csrf
                            <div class="text-center mb-1 mt-2">
                                <img style="width: 50%;" class="mx-auto" src="images/logo.png" alt="Bootz2Bitz">
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="fs-5 fw-normal col-form-label ">{{ __('Name') }}</label>

                                <div class="">
                                    <input id="name" type="text" placeholder="Enter Your Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="fs-5 fw-normal col-form-label ">{{ __('Email') }}</label>

                                <div class="">
                                    <input id="email" type="email" placeholder="Enter Your Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="fs-5 fw-normal col-form-label ">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" placeholder="Enter Your Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="fs-5 fw-normal col-form-label ">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder="Confirm Your Password" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="text-center">
                                    <button type="submit" style="background: #c231d5;border: #c231d5"
                                        class="col-md-12 h-75 my-2  btn text-white">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
