<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'رایان') }}</title>   

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
</head>
<body>
    <div id="app">   
        <header>
            
            <nav dir="ltr">
               
                <div class="desktop-navbar">
                    <div class="logo ">
                        <h3>rayan <span class="myspan">line</span></h3>
                    </div>
                    <ul>          
                        @guest
                            @if (Route::has('login'))
                                <li >
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li >
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class=" dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-users"></i>
                                </a>
                            

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if ( Auth::user()->role === 'admin' )
                                    <a class="dropdown-item" href="{{ route('categories.index') }}">
                                        {{ __('message.category') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('questionnair.index') }}">
                                        {{ __('message.questionnair') }}
                                    </a>
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
                        <li>
                            <select class="form-control changeLang">
                                <option value="fa" {{ session()->get('locale') == 'fa' ? 'selected' : '' }}>فارسی</option>
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            </select>
                        </li>
                        <li><a href="#"> {{ __('message.aboutUs') }}</a></li>
                        <li><a href="{{ route('cuntactus') }}"> {{ __('message.contactUs') }} </a></li>
                        <li><a href="/">{{ __('message.home') }}</a></li>
                    </ul>
                </div>
                
                <div class="container mt-5 mobile-menu">
                    <div class="mobile-navbar">
                        <div class="logo move-1" >
                            <h3>rayan <span>line</span></h3>
                        </div>
                        <div id="humberger-menu">
                            <i class="fas fa-bars fa-2x"></i>
                        </div>
                    </div>
                </div>
               

            </nav>
            <div class="offcanavas" id="menu" >
                <div class="times mt-3" id="close">
                    <i class="fa fa-times fa-2x m-3"></i>
                </div>
                <hr>
                <ul>        
                        <li><a href="/">{{ __('message.home') }}</a></li>  
                        <li><a href="{{ route('cuntactus') }}">{{ __('message.contactUs') }}</a></li>
                        <li><a href="#">{{ __('message.aboutUs') }}</a></li>
                        @guest
                            @if (Route::has('login'))
                                <li >
                                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li >
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class=" dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-users"></i>
                                </a>
                            

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if ( Auth::user()->role === 'admin' )
                                    <a class="dropdown-item" href="{{ route('categories.index') }}">
                                        {{ __('message.category') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('questionnair.index') }}">
                                        {{ __('message.questionnair') }}
                                    </a>
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
            </div>
            <!-- ! desktop navbar -->
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
       <script src="{{ asset('js/jquery3.6.js') }} "></script>
       <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
       <script src="{{ asset('js/popper.min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
       <script src="{{ asset('js/aos.js') }}"></script>
       <script src="{{ asset('js/all.min.js') }}"></script>
       
           
      
       <script type="text/javascript">
       AOS.init();
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
            });
           var url = "{{ route('changeLang') }}";
           $(".changeLang").change(function(){
               window.location.href = url + "?lang="+ $(this).val();
           });
      
            // ! get items
            const humberger = document.getElementById("humberger-menu");
            const menu = document.getElementById("menu");
            const close = document.getElementById("close");

            humberger.addEventListener("click", () => {
                menu.style.transform = "translateX(0rem)";
                menu.style.display = "block";
            });

            close.addEventListener("click", () => {
                menu.style.transform = "translateX(100rem)"
                menu.style.display = "none";
            });

    </script>
</body>
</html>
