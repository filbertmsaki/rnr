<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-web.head-component />

<body class="body-wrapper">
    <!-- preloader -->
    <x-web.preloader-component />
    <!-- header end -->
    <header class="header header-1 header-3">
        <x-web.top-bar-area-component />
        <!-- Header Section Start -->
        <x-web.header-component />
    </header>
    <!-- mobile menu - responsive menu  -->
    <x-web.mobile-menu-component />
    <div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
    <!-- header end -->
    <div class="header-gutter home"></div><!-- header end -->
    {{ $slot }}
    <!-- footer start -->
    <x-web.footer-component />
    <!-- footer end -->
    <!--  ALl JS Plugins
    ====================================== -->
    <x-web.scripts-component />
</body>
<!-- Mirrored from rrdevs.net/demos/html/consulter/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 05:49:47 GMT -->

</html>
