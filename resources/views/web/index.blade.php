<x-web.app-layout>
    @section('pagetitle', 'Home Page')
    @push('styles')
    @endpush
    @push('scripts')
    @endpush
    <!-- banner slider start -->
    <section class="banner-slider__wrapper pt-0 pb-0 overflow-hidden">
        <div class="slider-controls">
            <div class="banner-slider-arrows d-flex flex-column"></div>
        </div>

        <div class="banner-slider overflow-hidden">
            <div class="slider-item" style="background-image: url({{ asset('images/slider-bg2.jpg') }});">
                <div class="number" data-animation="fadeInUp" data-delay="0.6s">01</div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content text-center">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp"
                                    data-delay="0.5s">WELCOME TO <span>R&R ASSOCIATES</span></h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                    data-delay="1s">We handle your Media Relations</h1>
                                <div class="theme-btn__wrapper d-flex justify-content-center">
                                    <a href="{{ route('web.services.index') }}" class="theme-btn btn-sm"
                                        data-animation="fadeInUp" data-delay="1.3s">Our Services <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                    <a href="{{ route('web.contact') }}" class="theme-btn btn-sm btn-white"
                                        data-animation="fadeInUp" data-delay="1.5s">Contact Us<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{ asset('images/slider-bg1.jpg') }});">
                <div class="number" data-animation="fadeInUp" data-delay="0.6s">02</div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content text-center">

                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                    data-delay="1s">Let us help you Grow your business</h1>

                                <div class="theme-btn__wrapper d-flex justify-content-center">
                                    <a href="{{ route('web.services.index') }}" class="theme-btn btn-sm"
                                        data-animation="fadeInUp" data-delay="1.3s">Our Services <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                    <a href="{{ route('web.contact') }}" class="theme-btn btn-sm btn-white"
                                        data-animation="fadeInUp" data-delay="1.5s">Contact Us <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{ asset('images/slider-bg3.jpg') }});">
                <div class="number" data-animation="fadeInUp" data-delay="0.6s">03</div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content text-center">
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp"
                                    data-delay="1s">We are a Professional Event Management Company</h1>
                                <div class="theme-btn__wrapper d-flex justify-content-center">
                                    <a href="{{ route('web.services.index') }}" class="theme-btn btn-sm"
                                        data-animation="fadeInUp" data-delay="1.3s">Our Services <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                    <a href="{{ route('web.contact') }}" class="theme-btn btn-sm btn-white"
                                        data-animation="fadeInUp" data-delay="1.5s">Contact Us <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner slider end -->
    <!-- about-us start -->
    <section class="about-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-us__content  mb-lg-60 mb-md-50 mb-sm-40 mb-xs-30">
                        <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                src="assets/img/team-details/badge-line-yellow.svg" class="img-fluid mr-10" alt> About
                            Us</span>
                        <h2 class="title color-secondary mb-20 mb-sm-15 mb-xs-10">Why Choosing US</h2>

                        <div class="description font-la mb-20 mb-sm-20 mb-xs-20">
                            <p>R&R ASSOCIATES is a full service Public Relations, Event Management, Media Planning and
                                Buying and Advertising firm based in Dar es Salaam, Tanzania. We specialize in brand
                                building campaigns and product launches to create excitement among the media, buyers,
                                the end consumer and entertainment and business communities.</p>
                        </div>

                        <div class="why-choose__item-wrapper d-grid justify-content-between mb-20 mb-sm-20 mb-xs-20">
                            <div class="why-choose__item">
                                <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                    <i class="icon-target-2"></i>
                                </div>

                                <h5 class="title color-secondary fw-500 mb-10">Our Mission</h5>

                                <div class="description font-la">‘Be heard always’ its your right. R&R Associates is a
                                    team of creative, innovative and responsive individuals who are passionately focused
                                    on the needs of the clients.</p>
                                </div>
                            </div>

                            <div class="why-choose__item">
                                <div class="icon mb-15 mb-md-10 mb-xs-5 color-yellow">
                                    <i class="fa fa-eye"></i>
                                </div>

                                <h5 class="title color-secondary fw-500 mb-10">Our Vision</h5>

                                <div class="description font-la">
                                    <p>To be the preferred choice provider of quality PR, Events management and
                                        Advertising company in East Africa.</p>
                                </div>
                            </div>




                        </div>

                        <a href="{{ route('web.about') }}" class="theme-btn  btn-yellow-transparent fw-600">Read
                            More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-us__media d-flex align-content-center justify-content-center align-items-center">
                        <div class="media">
                            <img src="{{ asset('images/about-us-01.jpg') }}" class="img-fluid" width="350" alt>
                        </div>
                        <div class="expert-team expert-team-two text-center"
                            style="background-image: url({{ asset('images/Event-management.jpg') }})">
                            <div class="number color-white mb-10 mb-xs-5 fw-600"><span>10</span>+</div>
                            <h6 class="title font-la color-white">Events Management</h6>
                        </div>
                        <div class="expert-team expert-team-three text-center"
                            style="background-image: url(assets/img/home-2/expert-team-3.png)">
                            <div class="number color-white mb-10 mb-xs-5 fw-600"><span>30</span>+</div>
                            <h6 class="title font-la color-white">Media Planning and Buying</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us end -->
    <!-- our-provide start -->
    <section
        class="similar-work services-work bg-dark_white pb-xs-50 pt-xs-50 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-50 pb-50 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="employee-friendly__content mb-65 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                        <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                src="assets/img/team-details/badge-line-yellow.svg" class="img-fluid mr-10" alt> Our
                            Services</span>
                        <h2 class="title color-d_black">What We Do</h2>

                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <x-web.service-card-component :service="$service" />
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="theme-btn-wrapper mt-50 mt-md-40 mt-sm-30 mt-xs-25 text-center">
                        <a href="{{ route('web.services.index') }}" class="theme-btn btn-transparent fw-600"><i
                                class="far fa-sync-alt"></i> More Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-provide end -->

    <!-- our-porfolio start -->
    <section
        class="our-team our-porfolio pb-xs-50 pt-xs-50 pt-sm-50 pb-sm-50 pt-md-50 pb-md-80 pt-50 pb-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-9">
                    <div class="blog-news__content">
                        <span class="sub-title fw-500 color-yellow text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block"><img
                                src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10"
                                alt="">OUR RECENT WORKS</span>
                        <h2 class="title color-d_black">Amazing Work <span>Showcase</span></h2>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="blog-news__content mt-md-25 mt-sm-15 mt-xs-10 text-start text-lg-end">
                        <a href="{{ route('web.portfolio.index') }}" class="theme-btn">View All Portfolios <i
                                class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="our-porfolio__slider mt-65 mt-sm-50 mt-xs-40">
            @foreach ($portfolios as $portfolio)
                <div class="slider-item">
                    <div class="our-project__item overflow-hidden">
                        <img src="{{ $portfolio->file }}" alt>

                        <div class="content d-flex align-items-center justify-content-between">
                            <div class="text">
                                <span
                                    class="fw-500 color-yellow d-block mb-10 text-uppercase">{{ @$portfolio->services }}</span>
                                <h5 class="title color-secondary">{{ @$portfolio->title }}</h5>
                            </div>

                            <a href="{{ route('web.portfolio.index') }}" class="theme-btn"><i
                                    class="icon-arrow-right-2"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </section>
    <!-- our-porfolio end -->

    <section class="can-help can-help-home-3 bg-dark_white  pb-xs-50 pb-sm-50 pb-md-50 pb-50 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="can-help__content  mb-sm-40 mb-xs-40 mb-md-45 mb-lg-50">
                        <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">Experience The Evolution Of Your
                            Business</h2>

                        <div class="description font-la mb-md-25 mb-sm-25 mb-xs-20 mb-lg-30 mb-50">
                            <p>We'd love to hear from you whether you are curious about our information, servises and
                                works.</p>
                        </div>

                        <div class="help-text mb-md-25 mb-sm-25 mb-xs-20 mb-lg-25 mb-40">
                            <a><img src="assets/img/icon/question-comment.svg" class="img-fluid mr-xs-10 mr-20"
                                    alt="">Need help? <span>Contact Us</span></a>
                        </div>

                        <div class="can-help__content-btn-group d-flex flex-column flex-sm-row">
                            <a href="tel:+255713444411"
                                class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                <div class="icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="text">
                                    <span class="font-la mb-10 d-block fw-500 color-d_black">Call Us Everyday</span>
                                    <h5 class="fw-500 color-d_black" style="font-size: 16px;">+255 713 444 411 </h5>
                                </div>
                            </a>

                            <a href="mailto:info@riskreputation.com"
                                class="theme-btn d-flex flex-column flex-md-row align-items-md-center">
                                <div class="icon">
                                    <i class="icon-email-1"></i>
                                    <!-- <img src="assets/img/icon/phone-1.svg" alt=""> -->
                                </div>
                                <div class="text">
                                    <span class="font-la mb-10 d-block fw-500 color-d_black">Email Drop Us</span>
                                    <h5 class="fw-500 color-d_black" style="font-size: 16px;">info@riskreputation.com
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div
                        class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85">
                        <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                            <h6 class="sub-title fw-500 color-primary text-uppercase mb-15"><img
                                    src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10"
                                    alt=""> Get In Touch</h6>
                            <h3 class="title color-d_black">Free Consultation</h3>
                        </div>

                        <form action="{{ route('web.contact.store') }}" method="POST">
                            @csrf
                            <div class="single-personal-info">
                                <input type="text" id="fname" name="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="single-personal-info">
                                <input type="tel" id="phone" name="phone" placeholder="Your phone number"
                                    required>
                            </div>
                            <div class="single-personal-info">
                                <input type="email" id="email" name="email" placeholder="Your e-mail"
                                    required>
                            </div>
                            <div class="single-personal-info">
                                <textarea placeholder="Your Massage" name="message" required></textarea>
                            </div>
                            <button type="submit" class="theme-btn btn-sm">Contact Us<i
                                    class="far fa-chevron-double-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web.app-layout>
