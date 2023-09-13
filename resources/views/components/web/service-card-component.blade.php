<div class="similar-work__item mb-30 d-flex justify-content-between flex-column">
    <div class="top d-flex align-items-center">
        <div class="icon color-white text-center">
            <i class="fa fa-cogs"></i>
        </div>

        <h4 class="title color-d_black"><a href="services-details.html">{{ $service->title }}</a>
        </h4>
    </div>

    <div class="bottom">
        <div class="media overflow-hidden">
            <img loading="lazy"  src="{{ $service->photo }}" class="img-fluid" alt="">
        </div>

        <div
            class="text pt-30 pr-30 pb-30 pl-30 pt-sm-20 pt-xs-15 pr-sm-20 pr-xs-15 pb-sm-20 pb-xs-15 pl-sm-20 pl-xs-15 font-la">
            <p
                style=" display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;">
                {!! @$service->short_description !!}</p>
        </div>

        <a href="{{ route('web.services.show', $service->secure_token) }}" class="theme-btn text-center fw-600">Read
            More <i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
