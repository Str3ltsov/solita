<footer>
    <section class="footer__area footer-bg pt-100 pb-10">
        <div class="container">
            <div class="footer-main__wrapper pb-40">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget footer-col-1 mb-60">
                            <div class="footer__title">
                                <h4>{{ __('footer.aboutUs') }}</h4>
                            </div>
                            <div class="footer__content">
                                <p>
                                    {{ __('footer.description') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__widget footer-col-2 mb-60">
                            <div class="footer__title">
                                <h4>{{ __('footer.pages') }}</h4>
                            </div>
                            <div class="footer__link">
                                <ul>
                                    @foreach ($pages as $page)
                                        <li>
                                            <a href="{{ url("/pages/$page->route") }}">{{ $page->name }}</a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href="{{ route('contacts') }}">{{ __('menu.contacts') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="footer__widget footer-col-4 mb-60">
                            <div class="footer__title">
                                <h4>{{ __('footer.contacts') }}</h4>
                            </div>
                            <div class="footer__contact">
                                <ul class="d-flex flex-column gap-3">
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>{{ $contacts[0]->title }}: {{ $contacts[0]->description }}</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fa-solid fa-file-invoice"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>{{ $contacts[1]->title }}: {{ $contacts[1]->description }}</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>{{ $contacts[2]->title }}: <a
                                                    href="tel:{{ implode(explode(' ', $contacts[2]->description)) }}">{{ $contacts[2]->description }}</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>{{ $contacts[3]->title }}: <a
                                                    href="mailto:{{ $contacts[3]->description }}">{{ $contacts[3]->description }}</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>{{ $contacts[4]->title }}:
                                                <a target="_blank"
                                                    href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">
                                                    {{ $contacts[4]->description }}
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__info-area">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-6">
                                <div class="footer__logo logo logo-footer">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('images/Solita_logo_white.png') }}" alt="Solita"
                                            height="40">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="copyright__text">
                    <p>{{ __('footer.allRightsReserved') . ' © 2018-2023 UAB "Solita"' }}</p>
                </div>
            </div>
        </div>
    </section>
</footer>

<style>
    .logo-footer a,
    .logo-footer a:visited {
        color: #fafafa;
    }
</style>
