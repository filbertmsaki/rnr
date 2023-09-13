<x-web.app-layout>
    @section('pagetitle', 'Our Exparience')
    @push('styles')
    @endpush
    @push('scripts')
    @endpush
    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">@yield('pagetitle')</div>
                        <div class="page-title">
                            <h1>@yield('pagetitle')</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('pagetitle')</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->
    <!-- our-company start -->
    <section
        class="our-company  pt-xs-80 pb-xs-30 pt-sm-100 pb-sm-30 pt-md-100 pb-md-30 pt-120 pb-30 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida">
                        <img src="{{ asset('images/why-img1.jpg') }}" alt="" class="img-fluid">

                        <div class="years-experience overflow-hidden mt-20 mt-sm-10 mt-xs-10 text-center">
                            <div class="number mb-5 color-white">
                                <span class="counter">5</span><sup>+</sup>
                            </div>

                            <h5 class="title color-white">Years Experience</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida border-radius">
                        <img src="{{ asset('images/why-img2.jpg') }}" alt="" class="img-fluid">

                        <div class="horizental-bar"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img
                                src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt="">
                            Know Our Exparience</span>

                        <div class="descriiption font-la mb-20 mb-md-15 mb-sm-10 mb-xs-15">
                            <p>Our company is run by professionally qualified directors backed up by highly qualified
                                and motivated staff. We a re setting standards in the region and there is nothing more
                                satisfying like that in this business. Locally and internationally, we are handling a
                                well controlled client database, government institutions, NGOs and the private sector.
                                We are members of reputable media and PR associations and have been awarded for
                                Excellence.</p>
                        </div>
                        <div class="descriiption font-la mb-10 mb-md-5 mb-sm-10 mb-xs-5">
                            <p>We have the normal company organization chart, but we work freely, no one is THE BOSS. We respect every employee opinions and thus our PR firm has often been referred by our associates and partners as the BEST PLACE TO WORK .</p>
                        </div>

                        <div class="blog-post-details">
                            <blockquote>
                                <p>The greatest leader is not necessarily the one who does the greatest things. He is the one that gets the people to do the greatest things</p>
                                <h6>Ronald Reagan</h6>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-company end -->
</x-web.app-layout>
