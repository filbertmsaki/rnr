<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ config('app.name') }} - @yield('page_title')</title>
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Google Fonts -->
    <link rel='stylesheet'
        href='{{ asset('assets/css/spartan.css') . '?v=' . filemtime(base_path() . '/public/assets/css/spartan.css') }} }}'
        type='text/css' media='all' />
    <!-- Google Fonts -->
    <link rel='stylesheet' href='{{ asset('assets/css/bootstrap.min.css' ) }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets/css/scss/elements/theme-cssc8d8.css') }}' type='text/css'
        media='all' />
</head>

<body class="theme-creote page-home-default-one">
    <div id="page" class="page_wapper hfeed site">
        <div id="wrapper_full" class="content_all_warpper">

            <div id="content" class="site-content ">
                <div class="no-container">
                    <div class="no-row">
                        <div class="full_width_box">
                            <div class="whole_login_content">
                                <div class="register_login">
                                    <div class="simpleParallax"><img decoding="async" src="{{ asset('assets/images/login-min.jpg') }}"
                                            class="cover-parallax" alt="image"
                                            style="Transform: translate3d(0px, 37px, 0px) scale(1.3); will-change: Transform; transition: Transform 0.6s cubic-bezier(0, 0, 0, 1) 0s;">
                                    </div>
                                    <div class="login_left_side">
                                        <div class="login_content_box">
                                            <a href="{{route('web.index')}}" class="login_logo"><img decoding="async"
                                                    src="{{ asset('assets/images/logo-default.png') }}"
                                                    class="login_logo" alt="image"></a>
                                            {{ $slot }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!---========================== javascript ==========================-->
    <script type='text/javascript' src='{{ asset('assets/js/jquery-3.6.0.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/bootstrap.min.js') }}'></script>
</body>

</html>
