<div class="mobile-nav mobile-nav-red">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>
    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
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
    </nav>
</div>
