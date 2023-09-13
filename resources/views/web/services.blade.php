<x-web.app-layout>
    @section('pagetitle', 'Our Sevices')
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
                        <div class="transparent-text">Our Services</div>
                        <div class="page-title">
                            <h1>Our Services</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('web.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        {{-- <img src="assets/img/page-banner/page-banner-start.svg" class="img-fluid start" alt="">
                        <img src="assets/img/page-banner/page-banner.jpg" class="img-fluid" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- similar-work start -->
    <section
        class="similar-work services-work bg-dark_white pb-xs-50 pt-xs-50 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-50 pb-50 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <x-web.service-card-component :service="$service" />
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- similar-work end -->

    {{-- <x-web.client-brand-component /> --}}
</x-web.app-layout>
