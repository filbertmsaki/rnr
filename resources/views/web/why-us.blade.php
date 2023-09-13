<x-web.app-layout>
    @section('pagetitle', 'Why R&R')
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
    <!-- company-skill start -->
    <section
        class="company-skill pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">

            <div>
                <span class="sub-title d-block fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-md-15 mb-20"><img loading="lazy"
                        src="assets/img/team-details/badge-line.svg" class="img-fluid mr-10" alt="">Company
                    Skills</span>
                <h2 class="title color-pd_black mb-25 mb-xs-10 mb-sm-15"></h2>

                <div class="description font-la mb-20">
                    <p>What set us apart from other public relations companies is that we understand that in PR
                        we are not the boss , our clients are. Our staff is hard working team in the PR game and
                        we do not operate on a 9 to 5 mentality. We work until the job is done and we tirelessly
                        campaign for your visibility in the press.</p>
                </div>

                <div class="description font-la mb-20">
                    <p>Our impeccable writing skills, influential contacts and professionalism are just a small
                        sample of what we offer to help you succeed in your future operations. We also offer
                        complete services for getting your company online as well as designing your ‘Company
                        Appearance’ packages which includes your stationaries, business cards and any other
                        materials you may need. We truly are your one stop shop for all your marketing and
                        public relations requirements.</p>
                </div>
                <div class="description font-la mb-20">
                    <p>R&R Associates has an in house art department to maintain creativity and quality control
                        over all projects. The agency’s staff is experienced in the fields of marketing,
                        advertising and public relations. Our combined efforts will deliver a branding and image
                        enhancement campaign with a daily high level of creativity and client service.</p>
                </div>
                <div class="description font-la">
                    <p>Our company is able to offer you a full service campaign at a cost that fits your company
                        budget. We will work with you to design an affordable plan to benefit your current
                        company marketing plans.</p>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="company-skill__content">




                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- company-skill end -->
</x-web.app-layout>
