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
                        <div class="transparent-text">Contact</div>
                        <div class="page-title">
                            <h1>Contact <span>With Us</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img loading="lazy"  src="assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt>
                        {{-- <img loading="lazy"  src="assets/img/page-banner/page-banner-1.jpg" class="img-fluid" alt> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->
    <!-- contact-us start -->
    <section class="contact-us pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us__content">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-15 mb-xs-10 mb-20"><img loading="lazy"
                                src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt> contact us
                        </h6>
                        <h2 class="title color-d_black mb-sm-15 mb-xs-10 mb-20">Get
                            in Touch</h2>

                        <div class="description font-la mb-20">
                            <p>We'd love to hear from you whether you are curious about our information, servises and
                                works.
                            </p>
                        </div>
                    </div>
                    <div class="row contact-us__item-wrapper mt-xs-35 mt-sm-40 mt-md-45">
                        <div class="col-12">
                            <div class="contact-us__item mb-40">
                                <div
                                    class="contact-us__item-header mb-15 mb-md-15 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <h5 class="title color-d_black">Our
                                        Office</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    Jued Business Center, Garden Road, Mikocheni 2nd Floor, Wing A
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-us__item mb-20">
                                <div
                                    class="contact-us__item-header mb-15 mb-md-15 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-phone"></i>
                                    </div>

                                    <h5 class="title color-d_black">Call Us</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="tel:+255713444411">+255 713 444 411</a></li>
                                        <li><a href="tel:+255763900902">+255 763 900 902</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="contact-us__item mb-40">
                                <div
                                    class="contact-us__item-header mb-15 mb-md-15 mb-sm-15 mb-xs-10 d-flex align-items-center">
                                    <div class="icon mr-10 color-primary">
                                        <i class="icon-email"></i>
                                    </div>

                                    <h5 class="title color-d_black">Email Us</h5>
                                </div>

                                <div class="contact-us__item-body font-la">
                                    <ul>
                                        <li><a href="mailto:info@riskreputation.com">info@riskreputation.com
                                            </a></li>
                                        <li><a href="mailto:support@riskreputation.com">support@riskreputation.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <div class="contact-form">
                            <div
                                class="contact-form pt-md-30 pt-sm-25 pt-xs-20 pb-md-40 pb-sm-35 pb-xs-30 pt-xl-30 pb-xl-50 pt-45 pr-xl-50 pl-md-40 pl-sm-30 pl-xs-25 pr-md-40 pr-sm-30 pr-xs-25 pl-xl-50 pr-85 pb-60 pl-85">
                                <div class="contact-form__header mb-sm-35 mb-xs-30 mb-40">
                                    <h6 class="sub-title fw-500 color-primary text-uppercase mb-15"><img loading="lazy"
                                            src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt>
                                        Need help?
                                    </h6>
                                    <h3 class="title color-d_black">Contact Us</h3>
                                </div>
                                <form action="{{ route('web.contact.store') }}" method="POST">
                                    @csrf
                                    <div class="single-personal-info">
                                        <input type="text" id="fname" name="name" placeholder="Your Name"
                                            required>
                                    </div>
                                    <div class="single-personal-info">
                                        <input type="tel" id="phone" name="phone"
                                            placeholder="Your phone number" required>
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
            </div>

            <div class="row">
                <div class="col-12">
                    <hr class="mt-md-45 mt-sm-30 mt-xs-30 mt-60">
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us end -->

    <!-- contact-us form end -->
    <section class="contact-form  mb-xs-10 mb-sm-10 mb-md-10 mb-10 overflow-hidden">
        <div id="contact-map" class="mb-sm-30 mb-xs-25">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.067985373786!2d39.249028373789294!3d-6.761564993235091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c331092fa55%3A0xc4a52975a7930a0a!2sJued%20Business%20Center!5e0!3m2!1sen!2stz!4v1694249552612!5m2!1sen!2stz"
                style="width: 100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- contact-map -->


    </section>
    <!-- contact-us form end -->


</x-web.app-layout>
