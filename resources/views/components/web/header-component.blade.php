<div class="main-header-wraper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="{{ route('web.index') }}">
                                <img src="{{ asset('images/rnr-logo.jpg') }}" width="80" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <ul>
                                <li class="active">
                                    <a href="{{ route('web.index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                    <ul>
                                        <li><a href="{{ route('web.about') }}">Our Company</a></li>
                                        <li><a href="{{ route('web.why_us') }}">Why Us</a></li>
                                        <li><a href="{{ route('web.our_exparience') }}">Our Exparience</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('web.services.index') }}">Our Services</a></li>
                                <li>
                                    <a href="{{ route('web.portfolio.index') }}">Our Portfolio</a>
                                </li>
                                <li><a href="{{ route('web.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                            <div class="mobile-nav-wrap">
                                <div id="hamburger">
                                    <i class="fal fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
