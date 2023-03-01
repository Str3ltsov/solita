{{--<header class="sticky-top">--}}
{{--    <nav class="navbar navbar-expand-lg bg-light py-3">--}}
{{--        <div class="container-fluid container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                <h4 class="m-0 p-0">{{ __('Solita') }}</h4>--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarTogglerDemo02">--}}
{{--                <ul class="navbar-nav mb-2 mb-lg-0">--}}
{{--                    <li class="nav-item mx-md-3">--}}
{{--                        <a class="nav-link @if (Str::contains(url()->current(), 'apie_mus')) active @endif" href="{{ route('apieMus') }}">--}}
{{--                            {{ $pages[\App\Enums\PageEnum::APIE_MUS] }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mx-md-3">--}}
{{--                        <a class="nav-link @if (Str::contains(url()->current(), 'es_projektai')) active @endif" href="{{ route('esProjektai') }}">--}}
{{--                            {{ $pages[\App\Enums\PageEnum::ES_PROJEKTAI] }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mx-md-3">--}}
{{--                        <a class="nav-link @if (Str::contains(url()->current(), 'paslaugos')) active @endif" href="{{ route('paslaugos') }}">--}}
{{--                            {{ $pages[\App\Enums\PageEnum::PASLAUGOS] }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mx-md-3">--}}
{{--                        <a class="nav-link @if (Str::contains(url()->current(), 'kontaktai')) active @endif" href="{{ route('kontaktai') }}">--}}
{{--                            {{ $pages[\App\Enums\PageEnum::KONTAKTAI] }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    @if (auth()->check())--}}
{{--                        <li class="nav-item mx-md-3">--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="m-0 p-0">--}}
{{--                                @csrf--}}
{{--                                <a class="nav-link" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Atsijungti') }}--}}
{{--                                </a>--}}
{{--                            </form>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}
<header>
    <div class="bd-ud-header-area">
        <div class="bd-ud-header-middle ud-white-bg d-none d-lg-block pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="bd-ud-logo logo">
                            <a href="{{ url('/') }}">Solita</a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="bd-ud-header-middle-info">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">
                                        <i class="fa-solid fa-location-dot me-2"></i>
                                        Taikos pr. 88a, 51182 Kaunas
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@solita.lt">
                                        <i class="fa-solid fa-envelope me-2"></i>
                                        info@solita.lt
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+37037247749">
                                        <i class="fa-solid fa-phone me-2"></i>
                                        +370 372 47749
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bd-ud-header-sticky" class="bd-ud-header-bottom bd-ud-hm-padd ud-black-bg-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-9 col-4">
                        <div class="bd-ud-main-menu d-none d-lg-block">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    <li class="menu-last">
                                        <a href="{{ url('/') }}">{{ __('Pagrindinis') }}</a>
                                    </li>
                                    <li class="menu-last">
                                        <a href="{{ route('apieMus') }}">{{ $pages[\App\Enums\PageEnum::APIE_MUS] }}</a>
                                    </li>
                                    <li class="menu-last">
                                        <a href="{{ route('esProjektai') }}">{{ $pages[\App\Enums\PageEnum::ES_PROJEKTAI] }}</a>
                                    </li>
                                    <li class="menu-last">
                                        <a href="{{ route('paslaugos') }}">{{ $pages[\App\Enums\PageEnum::PASLAUGOS] }}</a>
                                    </li>
                                    <li class="menu-last">
                                        <a href="{{ route('kontaktai') }}">{{ $pages[\App\Enums\PageEnum::KONTAKTAI] }}</a>
                                    </li>
                                    @auth
                                        <li class="menu-last d-lg-none">
                                            <a href="{{ route('puslapiai.index') }}">{{ __('Admino Skydas') }}</a>
                                        </li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-ud-mobile-logo d-lg-none logo">
                            <a href="{{ url('/') }}">Solita</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-8">
                        <div class="bd-ud-header-bottom-cta">
                            <div class="bd-ud-header-bottom-cta-wrapper d-flex align-items-center justify-content-end">
                                <div class="bd-ud-header-bottom-cta-item d-none d-xl-block">
                                    @guest
                                        <a class="bd-ud-btn" href="{{ route('kontaktai') }}">
                                            {{ __('Susisiekite su mumis') }}
                                            <i class="fa-solid fa-chevron-right fs-6 ms-2"></i>
                                        </a>
                                    @else
                                        <a class="bd-ud-btn" href="{{ route('puslapiai.index') }}">
                                            {{ __('Admino Skydas') }}
                                            <i class="fa-solid fa-chevron-right fs-6 ms-2"></i>
                                        </a>
                                    @endguest
                                </div>
                                <div class="bd-ud-header-bottom-cta-item d-xl-none">
                                    <div class="bd-ud-header__toggle">
                                        <button class="sidebar__toggle">
                                            <img src="{{ asset('assets/img/icon/svg/hambergar.svg') }}" alt="hambergar">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .logo {
        font-size: 36px;
        letter-spacing: 2px;
        font-weight: 800;
        font-family: "Raleway", sans-serif;
    }

    .logo a,
    .logo a:visited {
        -webkit-transition: all 150ms ease-in;
        -moz-transition: all 150ms ease-in;
        -o-transition: all 150ms ease-in;
        transition: all 150ms ease-in;
        color: #8a77be;
        text-decoration: none !important;
        outline: 0;
        opacity: .9;
    }

    .logo a:hover,
    .logo a:focus {
        opacity: 1;
    }
</style>
