<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} : @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico')}}" />

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column">
    @php $locale = session()->get('locale'); @endphp
    @php $user = Auth::user() @endphp


    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Toolbar Start -->
        <div class="toolbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="toolbar-social">
                            <ul>
                                <li><span class="title text-warning">@lang('lang.hello') @if(Auth::check()) {{Auth::user()->name }} @else @lang('lang.guest') @endif</span></li>
                                <li><a class="" href="{{route('lang', 'en')}}">EN</a></li>
                                <li><a class="nav-link" href="{{route('lang', 'fr')}}">FR</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="toolbar-login">
                            <div class="button">
                                @guest
                                    <a class="btn" href="{{ route('auth.create')}}">@lang('lang.registration')</a>
                                    <a class="btn" href="{{route('login')}}">@lang('lang.login')</a>
                                @else
                                    <a class="nav-link" href="{{route('logout')}}">@lang('lang.logout')</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="{{ asset('assets/images/logo/logo6.svg')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item"><a class=" active" href="{{route('home')}}">@lang('lang.home')</a></li>
                                    <li class="nav-item"><a class="" href="{{route('index')}}">@lang('lang.student_list')</a></li>
                                    <li class="nav-item"> <a class="" href="{{route('file.index')}}">@lang('lang.files_list')</a>
                                    </li>

                                    <li class="nav-item"> <a class="" href="{{route('blog.index')}}">@lang('lang.blog')</a>
                                    </li>
                                    @if (Auth::user())
                                        <li class="nav-item"><a class="" href="{{route('blog.user', $user->id)}}">@lang('lang.myblogs')</a></li>
                                    @endif
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    @yield('content')


    <footer class="text-center text-lg-start" style="background-color: #141e26;">
    
        <div class="container d-flex justify-content-center py-5">
            <div class="toolbar-social">
                <ul class="d-flex flex-row justify-content-space-between">
                    <li><a href="javascript:void(0)"><i class="lni px-3 lni-facebook-original"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni px-3 lni-twitter-original"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni px-3 lni-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni px-3 lni-linkedin-original"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni px-3 lni-google"></i></a></li>
                </ul>
            </div>
        </div>
    
        <!-- Copyright -->
        <div class="text-center text-white p-3">
            {{ config('app.name')}} © 2023
        </div>
        <!-- Copyright -->
    </footer>
</body>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

</html>