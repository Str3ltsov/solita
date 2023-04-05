<footer>
    <section class="footer__area footer-bg pt-100 pb-10">
        <div class="container">
            <div class="footer-main__wrapper pb-40">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget footer-col-1 mb-60">
                            <div class="footer__title">
                                <h4>{{ __('Apie mus') }}</h4>
                            </div>
                            <div class="footer__content">
                                <p>
                                    {{ __('UAB "Solita" yra start-up tipo įmonė ir veiklą vysto nuo 2018 metų pradžios. Pagrindinė įmonės veikla – IT sprendimų vystymas ir pardavimas.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__widget footer-col-2 mb-60">
                            <div class="footer__title">
                                <h4>{{ __('Puslapiai') }}</h4>
                            </div>
                            <div class="footer__link">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">{{ __('Pagrindinis') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('esProjektai') }}">{{ $pages[\App\Enums\PageEnum::ES_PROJEKTAI] }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('paslaugos') }}">{{ $pages[\App\Enums\PageEnum::PASLAUGOS] }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('kontaktai') }}">{{ $pages[\App\Enums\PageEnum::KONTAKTAI] }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="footer__widget footer-col-4 mb-60">
                            <div class="footer__title">
                                <h4>{{ __('Kontaktai') }}</h4>
                            </div>
                            <div class="footer__contact">
                                <ul class="d-flex flex-column gap-3">
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>Įmonės kodas: 304764201</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fa-solid fa-file-invoice"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>PVM mokėtojo kodas: LT100011832719</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>Telefonas: <a href="tel:+37037247749">+370 372 47749</a></p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>El. paštas: <a href="mailto:info@solita.lt">info@solita.lt</a></p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <p>Adresas:
                                            <a target="_blank" href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">
                                                Taikos pr. 88a, 51182 Kaunas
                                            </a></p>
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
                                    <a href="{{ url('/') }}"><img src="{{ asset('images/Solita_logo.png') }}" alt="Solita" height="40"></a>
                                </div>
                            </div>
{{--                            <div class="col-md-6 col-sm-6">--}}
{{--                                <div class="footer__link-3 text-md-end">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="javascript:void(0)"></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="copyright__text">
                    <p>{{ __('Visos teisės saugomos © 2018-2023 UAB "Solita"') }}</p>
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
