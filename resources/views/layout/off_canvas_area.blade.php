<div class="fix">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/Solita_logo_white.png') }}" alt="Solita" height="50">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix mb-40"></div>
                <div class="offcanvas__contact mt-30 mb-20">
                    <h4>{{ __('pages.contactInfo') }}</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" class="text-white"
                                    href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">
                                    {{ $contacts[4]->description }}
                                </a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a class="text-white"
                                    href="tel:{{ implode(explode(' ', $contacts[2]->description)) }}">{{ $contacts[2]->description }}</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@solita.lt" class="text-white">
                                    <span
                                        class="mailto:{{ $contacts[3]->description }}">{{ $contacts[3]->description }}</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                {{--                <div class="offcanvas__social"> --}}
                {{--                    <ul> --}}
                {{--                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> --}}
                {{--                        <li><a href="#"><i class="fab fa-twitter"></i></a></li> --}}
                {{--                        <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                {{--                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li> --}}
                {{--                    </ul> --}}
                {{--                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<div class="offcanvas-overlay-white"></div>
