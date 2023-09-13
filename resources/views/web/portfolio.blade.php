<x-web.app-layout>
    @section('pagetitle', 'Our Portfolio')
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
    <section class="our-project pb-xs-50 pt-xs-50 pt-sm-50 pb-sm-50 pt-md-50 pb-md-50 pt-50 pb-50 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                @foreach ($portfolios as $portfolio)
                <div class="col-lg-4 col-sm-6">
                    <div class="our-project__item overflow-hidden mb-30">
                        <img src="{{ $portfolio->file }}" alt="">

                        <div class="content d-flex align-items-center justify-content-between">
                            <div class="text">
                                <span class="fw-500 color-primary d-block mb-10 text-uppercase">{{ $portfolio->services }}</span>
                                <h5 class="title color-d_black">{{ $portfolio->title }}</h5>
                            </div>

                            <a href="javascript:void(0)" class="theme-btn"><img src="assets/img/icon/arrow-right-top.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                @endforeach





            </div>

            @if ( $portfolios->links())
            <div class="row">
                <div class="col-12">
                    <div class="page-nav-wrap text-center mt-50 mt-sm-40 mt-xs-35">
                        {{ $portfolios->links() }}
                    </div> <!-- /page-nav-wrap -->
                </div>
            </div>
            @endif

        </div>
    </section>
</x-web.app-layout>
