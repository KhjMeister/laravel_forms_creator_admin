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
              <h5 class="font-left-register align-self-center m-3">شما می توانید با اکانت <span class="tex1"> گوگل</span> وارد شوید</h2>
                
                <div class="col-sm-10 m-auto  text-center">
                  
                  <a class="btn btn-default px-5 header1" href="{{ url('auth/google') }}" >
                    {{__('message.GoogleLogin')}}
                </a> 
                </div>
                <h6 class="font-left-register m-3 align-self-center"></h6>
              <form class="form-horizontal " method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group mt-2">

                  <div class="col-sm-9 m-auto">
                    <input  id="email" type="email" class=" text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="ایمیل خود را وارد کنید">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                  <div class="col-sm-9 m-auto">
                    <input placeholder="پسورد خود را وارد کنید" id="password" type="password" class="mt-3 text-center form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                  <div class="col-sm-offset-2 col-sm-9 m-auto">
                    <div class="checkbox">
                      <label><input class=" mt-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  > مرا به خاطر بسپار</label>
                    </div>
                  </div>
                  <div class="col-sm-10 m-auto my-4 text-center">
                    <button type="submit" class="btn btn-default px-5 header1">
                        {{ __('Login') }}
                    </button>
                    
                  </div>
                  <div class="col-sm-9 m-auto  text-center">
                    @if (Route::has('password.request'))
                    <a class="tex2 fw-bold reset" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                    
                  <p class="fw-bold"><a class="reset2" asp-area="" asp-controller="Home" asp-action=""
                      href="{{route('register')}}">فرم عضویت</a></p>


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
              <img src="{{ asset('images/welcome-bg3.jpg')}}" class="move-1 mt-3 image-register2 align-self-center">
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

@endsection
