@extends('layouts.app')

@section('content')


<div class="container-fluid content-register">
    <div class="row">
      <div class="container">

        <div class="row mt-5">
          <div class="col-lg-1">

          </div>
          <div class="col-lg-5 ">
            <div class="card shadow">
              <img class="img-fluid move-2 img-register1 align-self-center" src="{{ asset('images/profile.png')}}">
              <h5 class="font-left-register align-self-center m-3">شما می توانید با اکانت <span class="tex1"> گوگل</span> در سایت ما ثبت نام کنید </h2>
                <div class="col-sm-10 m-auto text-center">
                    <a class="btn btn-default px-5 header1" href="{{ url('auth/google') }}" >
                        <strong>{{__('message.GoogleLogin')}}</strong>
                    </a>
                  
                </div>
                <h5 class="font-left-register m-3 align-self-center">یا</h5>
              <form class="form-horizontal " method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mt-2">
                  
                  <div class="col-sm-9 m-auto">
                    <input id="name" type="text" class="text-muted mt-2 text-center form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="نام کاربری در سایت را به انگلیسی وارد کنید" >
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                  <div class="col-sm-9 m-auto ">
                    <input id="phone" type="phone" class="form-control text-muted mt-3 text-center @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="شماره تلفن همراه خود را وارد کنید">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                </div>
                  
                  <div class="col-sm-9 m-auto">
                    <input id="email" type="email" class="mt-3 text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="ایمیل خود را وارد کنید" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                  <div class="col-sm-9 m-auto">
                      <input id="password" type="password" class="form-control mt-3 text-center @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="پسورد مورد نظر خود را وارد کنید">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="col-sm-9 m-auto">
                      <input id="password-confirm" type="password" class="form-control mt-3 text-center @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="پسورد خود را دوباره وارد کنید">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  </div>
                  <div class="col-sm-offset-2 col-sm-9 m-auto">
                    <div class="checkbox">
                      <label><input type="checkbox" name="remember" class="mt-3"> مرا به خاطر بسپار</label>
                    </div>
                  </div>
                  <div class="col-sm-9 m-auto my-4 text-center">
                    <button type="submit" class="btn btn-default px-5 header1">{{ __('Register') }}</button>
                  </div>
                  
                </div>

              </form> 
            </div>

          </div>
          
          <div class="col-lg-5 test">
            <div class="card shadow">
              <h1 class="text-center mt-4 font-left-register">
                Rayan
                <br>
                Line
              </h1>
              <img src="{{ asset('images/welcome-bg3.jpg')}}" class="move-1 mt-3  mb-1 image-register align-self-center">
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
@endsection
