<footer class="bg-light py-5">
    <div class="container">
        <ul class="nav justify-content-center pb-3 mb-3">
            <li class="nav-item">
                <a href="{{ route('apieMus') }}" class="nav-link px-3 text-muted">{{ __('Apie Mus') }}</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('esProjektai') }}" class="nav-link px-3 text-muted">{{ __('ES Projektai') }}</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('paslaugos') }}" class="nav-link px-3 text-muted">{{ __('Paslaugos') }}</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kontaktai') }}" class="nav-link px-3 text-muted">{{ __('Kontaktai') }}</a>
            </li>
        </ul>
        <p class="text-center text-muted">{{ __('Visos teisės saugomos © 2019-2023 UAB "Solita"') }}</p>
    </div>
</footer>
