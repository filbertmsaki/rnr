<!DOCTYPE html>
<html lang="zxx">
<x-web.head-component />

<body>
    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
                <div class="loader-icon">
                    <img src="assets/images/fav.png" alt="Corporate Business HTML Template" />
                </div>
            </div>
            <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading"> B </span>
                <span data-text-preloader="O" class="letters-loading"> O </span>
                <span data-text-preloader="X" class="letters-loading"> X </span>
                <span data-text-preloader="F" class="letters-loading"> F </span>
                <span data-text-preloader="I" class="letters-loading"> I </span>
                <span data-text-preloader="N" class="letters-loading"> N </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
    </div>
    <!-- welcome content start from here -->
    <!--========== Header Section Start ==============-->
    <header class="sc-header-section" id="sc-header-sticky">
        <x-web.top-bar-area-component />
        <!-- Header Section Start -->
        <x-web.header-component />
    </header>
    <!--========== Header Section End ==============-->
    {{ $slot }}
    <!--=========== Footer Section Start =========-->
    <x-web.footer-component />
    <!--=========== Footer Section End =========-->
    <!--Sc Offcanvas Area Start-->
    <div id="sc-overlay-bg2" class="sc-overlay-bg2"></div>
    <div class="sc-product-offcanvas-area">
        <div class="sc-offcanvas-header d-flex align-items-center justify-content-between">
            <div class="sticky-logo logo-area text-center ">
                <a href="{{ route('web.index') }}"><img src="{{ asset('images/rnr-logo.png') }}" height="90" alt="Logo" /></a>
            </div>
            <div class="offcanvas-icon">
                <a id="canva_close" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
                        <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Canvas Mobile Menu start -->
        <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
            <ul class="nav-menu sc-mb-45 sc-pl-0">
                <li class="list-gap">
                    <a href="{{ route('web.index') }}"> Home</a>
                </li>
                <li class="list-gap">
                    <a href="{{ route('web.about') }}"> About Us</a>
                </li>
                <li class="list-gap">
                    <a href="{{ route('web.services.index') }}"> Our Services</a>
                </li>
                <li class="list-gap"><a href="#">Our Works</a></li>
                <li class="list-gap"><a href="{{ route('web.contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div class="sc-canva-button">
            <a class="sc-primary-btn" href="contact.html">Get Consulting</a>
        </div>
    </div>
    <!--Sc Offcanvas Area End-->
    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="icon-angle_right"></i>
    </div>
    <!-- End scrollUp  -->
    <!-- start scrollUp  -->
    <div class="boxfin-scroll-top progress-done">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919px, 307.919px;
                        stroke-dashoffset: 71.1186px;
                    ">
            </path>
        </svg>
        <div class="boxfin-scroll-top-icon">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="mdi:arrow-up" class="iconify iconify--mdi">
                <path fill="currentColor" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- End scrollUp  -->
    <x-web.scripts-component />
</body>

</html>
