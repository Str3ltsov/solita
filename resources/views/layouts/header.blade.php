<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-light py-3">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <h4 class="m-0 p-0">{{ __('Solita') }}</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-md-3">
                        <a class="nav-link @if (Str::contains(url()->current(), 'apie_mus')) active @endif" href="{{ route('apieMus') }}">
                            {{ __('Apie Mus') }}
                        </a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a class="nav-link @if (Str::contains(url()->current(), 'es_projektai')) active @endif" href="{{ route('esProjektai') }}">
                            {{ __('ES Projektai') }}
                        </a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a class="nav-link @if (Str::contains(url()->current(), 'paslaugos')) active @endif" href="{{ route('paslaugos') }}">
                            {{ __('Paslaugos') }}
                        </a>
                    </li>
                    <li class="nav-item mx-md-3">
                        <a class="nav-link @if (Str::contains(url()->current(), 'kontaktai')) active @endif" href="{{ route('kontaktai') }}">
                            {{ __('Kontaktai') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
