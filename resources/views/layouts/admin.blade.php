<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'رایان') }}</title>

    {{-- Scripts --}}
     <script src="{{ asset('js/jquery3.6.js') }}" defer></script> 

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.css') }}">
    <!-- ! my styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- ! owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- ! aos -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
</head>
<body>
    <div id="app">
        
        <header>

    <nav class="navbar navbar-expand-lg navbar-light header1">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/home') }}"> صفحه اصلی </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                خدمات ما
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">پرسشنامه ساز</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">آزمون ساز</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">فرم ساز</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link">تماس با ما</a>
            </li>
            
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                       

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if ( Auth::user()->role === 'admin' )
                            <a class="dropdown-item" href="{{ route('categories.index') }}">
                                {{ __('message.category') }}
                            </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <li class="nav-item" >
                <select class="form-control changeLang">
                    <option value="fa" {{ session()->get('locale') == 'fa' ? 'selected' : '' }}>فارسی</option>
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                
                </select>
             </li>
          </ul>

        </div>
      </div>
    </nav>

  </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

       <!-- ! scripts -->
       <script src="{{ asset('js/jquery3.6.js') }}"></script>
       <script src="{{ asset('js/popper.min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <!-- ?owl carousel -->
       <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
       <script>
           $('.owl-carousel').owlCarousel({
               loop: true,
               margin: 10,
               nav: true,
               responsive: {
                   0: {
                       items: 1
                   },
                   600: {
                       items: 3
                   },
                   1000: {
                       items: 5
                   }
               }
           })
       </script>
       <!-- ? aos -->
       <script src="{{ asset('js/aos.js') }}"></script>
       <script>
           AOS.init();
       </script>
       <script type="text/javascript">
           var url = "{{ route('changeLang') }}";
           $(".changeLang").change(function(){
               window.location.href = url + "?lang="+ $(this).val();
           });
       </script>
</body>
</html>
