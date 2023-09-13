<x-web.app-layout>
    @section('pagetitle', 'About Us')
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
    <!-- why-choose start -->
    <section class="why-choose pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5">
                    <div class="why-choose__media-wrapper d-flex flex-column">
                        <div class="gallery-bar bg-yellow"></div>

                        <div class="why-choose__media">
                            <img src="{{ asset('images/about-us-02.jpg') }}" alt class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="why-choose__content mt-lg-60 mt-md-50 mt-sm-40 mt-xs-35">
                        <div class="why-choose__text mb-40 mb-md-35 mb-sm-30 mb-xs-30">
                            <span
                                class="sub-title d-block fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-lg-20 mb-25"><img
                                    src="assets/img/team-details/badge-line-yellow.svg" class="img-fluid mr-10" alt> Why
                                choose
                                us</span>
                            <h2 class="title color-pd_black"></h2>

                            <div class="description font-la mt-20 mt-sm-15 mt-xs-10">
                                <p>R&R ASSOCIATES is a full service Public Relations, Event Management, Media Planning
                                    and Buying and Advertising firm based in Dar esSalaam, Tanzania. We specialize in
                                    brand building campaigns and product launches to create excitement among the media,
                                    buyers, the end consumer and entertainment and business communities.
                                </p>
                                <p> We create innovative, attention grabbing news angles that get our clients booked in
                                    high profile print publications, on television and radio, online, in industry trades
                                    and new media.</p>
                            </div>
                        </div>

                        <div class="row" data-sticky_parent>
                            <div class="col-12" data-sticky_column>

                                <div class="faq mt-20 mt-md-15 mt-sm-15 mt-xs-10" id="faq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="h-faq-2">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-2" aria-expanded="true" aria-controls="faq-2">
                                                <i class="icon-question-4"></i> Our Vision
                                            </button>
                                        </h2>

                                        <div id="faq-2" class="accordion-collapse collapse show"
                                            aria-labelledby="h-faq-2" data-bs-parent="#faq">
                                            <div class="accordion-body">
                                                <p>To be the preferred choice provider of quality PR, Events management
                                                    and Advertising company in East Africa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="h-faq-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
                                                <i class="icon-question-4"></i>Our Mission
                                            </button>
                                        </h2>

                                        <div id="faq-1" class="accordion-collapse collapse "
                                            aria-labelledby="h-faq-1" data-bs-parent="#faq">
                                            <div class="accordion-body">
                                                <p>‘Be heard always’ its your right. R&R Associates is a team of
                                                    creative, innovative and responsive individuals who are passionately
                                                    focused on the needs of the clients.</p>
                                                <p class="mt-2"> Our success is measured by our relationships, ethical
                                                    approach to
                                                    achieve results for our clients and our determination to become the
                                                    leader in our field of work.</p>
                                                <p class="mt-2">‘A business that makes nothing but
                                                    money is a poor business’. Henry Ford. Each new day is an education
                                                    and a reflection of the opportunities presented.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="h-faq-3">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                                <i class="icon-question-4"></i> We aim to deliver
                                            </button>
                                        </h2>

                                        <div id="faq-3" class="accordion-collapse collapse"
                                            aria-labelledby="h-faq-3" data-bs-parent="#faq">
                                            <div class="accordion-body">
                                                <div class="services-details__content">
                                                    <figure>
                                                        <ul>
                                                            <li>Value added PR, events and promotional marketing
                                                                solutions that are beyond clients’ expectations.</li>
                                                            <li>To enhance brand and corporate image of our clients.
                                                            </li>
                                                            <li>To play pro-active role towards the growth and expansion
                                                                of clients, business as we pursue our goals towards
                                                                successful growth.</li>
                                                        </ul>
                                                    </figure>
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
        </div>
    </section>
    <!-- why-choose end -->
</x-web.app-layout>
