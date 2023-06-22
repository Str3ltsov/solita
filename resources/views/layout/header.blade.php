<header>
    <div class="bd-ud-header-area">
        <div class="bd-ud-header-middle ud-white-bg d-none d-lg-block pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="bd-ud-logo logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/Solita_logo.png') }}" alt="Solita"
                                    height="50"></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="bd-ud-header-middle-info">
                            <ul>
                                <li>
                                    <a target="_blank"
                                        href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">
                                        <i class="fa-solid fa-location-dot me-2"></i>
                                        {{ $contacts[4]->description }}
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $contacts[3]->description }}">
                                        <i class="fa-solid fa-envelope me-2"></i>
                                        {{ $contacts[3]->description }}
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:{{ implode(explode(' ', $contacts[2]->description)) }}">
                                        <i class="fa-solid fa-phone me-2"></i>
                                        {{ $contacts[2]->description }}
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
                    <div class="col-xl-8 col-lg-10 col-md-11 col-4">
                        <div class="bd-ud-main-menu d-none d-lg-block">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    @foreach ($pages as $page)
                                        <li class="menu-last">
                                            <a href="{{ url("/pages/$page->route") }}">{{ $page->name }}</a>
                                        </li>
                                    @endforeach
                                    <li class="menu-last">
                                        <a href="{{ route('contacts') }}">{{ __('pages.contacts') }}</a>
                                    </li>
                                    @auth
                                        <li class="menu-last d-lg-none">
                                            <a href="{{ route('puslapiai.index') }}">{{ __('buttons.adminPanel') }}</a>
                                        </li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                        <div class="bd-ud-mobile-logo d-lg-none logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/Solita_logo_white.png') }}"
                                    alt="Solita" height="50"></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-2 col-md-1 col-8">
                        <div class="bd-ud-header-bottom-cta">
                            <div class="bd-ud-header-bottom-cta-wrapper d-flex align-items-center justify-content-end">
                                <div class="bd-ud-header-top-lang style-1">
                                    <select style="display: none;">
                                        @foreach (config('app.locales') as $locale)
                                            <option>{{ $locale }}</option>
                                        @endforeach
                                    </select>
                                    <div class="nice-select fs-6" tabindex="0">
                                        <span class="current">{{ config('app.locales.'.app()->getLocale()) }}</span>
                                        <ul class="list">
                                            @foreach (config('app.locales') as $key => $locale)
                                                <li data-value="{{ strtoupper($locale) }}" class="px-4 option @if ($key == app()->getLocale()) selected focus @endif">
                                                    <a href="/{{ $key }}" class="mx-0 px-0">{{ $locale }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                 </div>
                                <div class="bd-ud-header-bottom-cta-item d-none d-xl-block ms-4">
                                    @guest
                                        <a class="bd-ud-btn" href="{{ route('contacts') }}">
                                            {{ __('buttons.contactUs') }}
                                            <i class="fa-solid fa-chevron-right fs-6 ms-2"></i>
                                        </a>
                                    @else
                                        <a class="bd-ud-btn" href="{{ route('puslapiai.index') }}">
                                            {{ __('buttons.adminPanel') }}
                                            <i class="fa-solid fa-chevron-right fs-6 ms-2"></i>
                                        </a>
                                    @endguest
                                </div>
                                <div class="bd-ud-header-bottom-cta-item d-xl-none">
                                    <div class="bd-ud-header__toggle">
                                        <button class="sidebar__toggle">
                                            <img src="{{ asset('assets/img/icon/svg/hambergar.svg') }}"
                                                alt="hambergar">
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
