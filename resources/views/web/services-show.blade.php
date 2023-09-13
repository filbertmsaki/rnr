<x-web.app-layout>
    @section('pagetitle', 'Service Details')
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
                        <div class="transparent-text">Details</div>
                        <div class="page-title">
                            <h1>Services <span>Details</span></h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services Details</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->
    <!-- team-area start -->
    <section
        class="services-details pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-115 overflow-hidden">
        <div class="container">
            <div class="row" data-sticky_parent>
                <div class="col-xl-8" data-sticky_column>
                    <div class="media mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                        <img src="{{ $service->photo }}" alt="{{ $service->title }}">
                    </div>

                    <div class="services-details__content">
                        <h2>{{ $service->title }}</h2>
                        {!! $service->description !!}

                    </div>

                </div>

                <div class="col-xl-4">
                    <div class="main-sidebar" data-sticky_column>
                        <div class="single-sidebar-widget mb-40 pt-30 pr-30 pb-40 pl-30 pl-xs-20 pr-xs-20">
                            <h4 class="wid-title mb-30 mb-xs-20 color-d_black text-capitalize">Our
                                Services</h4>

                            <div class="widget_categories">
                                <ul>
                                    @foreach ($services as $item)
                                        <li><a href="{{ route('web.services.show', $item->secure_token) }}">{{ $item->title }}<i
                                                    class="fas fa-long-arrow-alt-right"></i></a></li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area end -->

    <!-- cta start -->
    <section class="cta-banner overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                        class="cta-banner__content d-flex flex-column flex-lg-row justify-content-between align-items-center pl-xs-20  pr-xs-20 pl-sm-30  pr-sm-30 pl-lg-50 pr-lg-50 pr-85 pl-85 overflow-hidden">
                        <div class="cta-banner__content-text">
                            <h3 class="title text-capitalize color-white">Small
                                Business Grow Fast With Our Consulting
                                Services</h3>
                        </div>
                        <div class="cta-banner__content-btn">
                            <a href="contact.html" class="theme-btn btn-white">Let’s Work
                                Together <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta start -->
</x-web.app-layout>
