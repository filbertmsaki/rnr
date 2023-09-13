<footer class="footer-1 overflow-hidden">
    <div class="footer-top mb-xs-5 mb-sm-10 mb-md-15 mb-lg-20 mb-25 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-footer-wid newsletter_widget">
                        <h6 class="title d-flex align-items-center color-white mb-30"><img
                                src="assets/img/icon/notification.svg" alt=""> keep up to date - get updates
                            with latest topics.</h6>

                        <div class="newsletter_box">
                            <form action="{{ route('web.subscriber.store') }}" method="POST">
                                @csrf
                                <input type="email" name="email" placeholder="Enter your email address" required>
                                <button class="theme-btn" type="submit">Subscribe Now <i
                                        class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-4">
                <h4 class="wid-title mb-30 color-white">About Us</h4>
                <div class="single-footer-wid recent_post_widget pl-xl-10 pl-65 pr-50 pr-xl-30 ">
                    <div class="description font-la color-white">
                        <p>R&R Associates is a team of creative, innovative and responsive individuals who are
                            passionately focused on the needs of the clients.</p>
                        <p>Our success is measured by our relationships, ethical approach to achieve results for our
                            clients and our determination to become the leader in our field of work.
                        </p>
                    </div>
                </div>
            </div> <!-- /.col-lg-4 - single-footer-wid -->

            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid">
                    <h4 class="wid-title mb-30 color-white">Contact Info</h4>

                    <div class="wid-contact wid-contact-office pb-30 mb-25">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="far fa-location-circle"></i>
                                </div>

                                <div class="contact-info font-la color-white">
                                    <p>Jued Business Center, Garden Road,
                                        Mikocheni 2nd Floor, Wing A</p>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="far fa-phone"></i>
                                </div>

                                <div class="contact-info font-la color-white">
                                    <p style="display:inline-block"> <a style="display:inline-block;"
                                            href="tel:+255713444411">+255 713 444 411</a> , <a
                                            style="display:inline-block;" href="tel:+255763900902">+255 763 900 902</a>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>

                                <div class="contact-info font-la color-white">
                                    <p style="display:inline-block"> <a style="display:inline-block"
                                            href="mailto:info@riskreputation.com">info@riskreputation.com</a>,
                                        <a style="display:inline-block"
                                            href="mailto:support@riskreputation.com">support@riskreputation.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid contact_widget">
                    <h4 class="wid-title mb-30 color-white">Working Time</h4>

                    <div class="contact-wrapper pt-30 pr-30 pb-30 pl-30">
                        <div class="wid-contact pb-30 mb-25">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Mon - Sat / 08am : 12pm</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Mon - Sat / 08am : 12pm</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="far fa-clock"></i>
                                    </div>

                                    <div class="contact-info font-la color-white">
                                        <p>Sunday Close</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="social-profile">
                            <ul>
                                <li><a href="https://facebook.com" target="__blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/" target="__blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="__blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="__blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                    <ul>
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li><a href="{{ route('web.about') }}">About Us</a></li>
                        <li><a href="{{ route('web.services.index') }}">Our Services</a></li>
                        <li><a href="#">Our Works</a></li>
                        <li><a href="{{ route('web.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->


        </div>
    </div>

    <div class="footer-bottom overflow-hidden">
        <div class="container">
            <div
                class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    &copy; {{ date('Y') }} <a href="{{ route('web.index') }}">{{ config('app.name') }}</a> | All
                    Rights Reserved
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
