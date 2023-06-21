@extends('layout.app')

@section('content')
    {{--    <div class="container"> --}}
    {{--        <div class="row justify-content-center"> --}}
    {{--            <div class="col-md-8"> --}}
    {{--                <div class="card"> --}}
    {{--                    <div class="card-header">{{ __('Login') }}</div> --}}

    {{--                    <div class="card-body"> --}}
    {{--                        <form method="POST" action="{{ route('login') }}"> --}}
    {{--                            @csrf --}}

    {{--                            <div class="row mb-3"> --}}
    {{--                                <label for="email" --}}
    {{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

    {{--                                <div class="col-md-6"> --}}
    {{--                                    <input id="email" type="email" --}}
    {{--                                           class="form-control @error('email') is-invalid @enderror" name="email" --}}
    {{--                                           value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

    {{--                                    @error('email') --}}
    {{--                                    <span class="invalid-feedback" role="alert"> --}}
    {{--                                        <strong>{{ $message }}</strong> --}}
    {{--                                    </span> --}}
    {{--                                    @enderror --}}
    {{--                                </div> --}}
    {{--                            </div> --}}

    {{--                            <div class="row mb-3"> --}}
    {{--                                <label for="password" --}}
    {{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

    {{--                                <div class="col-md-6"> --}}
    {{--                                    <input id="password" type="password" --}}
    {{--                                           class="form-control @error('password') is-invalid @enderror" name="password" --}}
    {{--                                           required autocomplete="current-password"> --}}

    {{--                                    @error('password') --}}
    {{--                                    <span class="invalid-feedback" role="alert"> --}}
    {{--                                        <strong>{{ $message }}</strong> --}}
    {{--                                    </span> --}}
    {{--                                    @enderror --}}
    {{--                                </div> --}}
    {{--                            </div> --}}

    {{--                            <div class="row mb-3"> --}}
    {{--                                <div class="col-md-6 offset-md-4"> --}}
    {{--                                    <div class="form-check"> --}}
    {{--                                        <input class="form-check-input" type="checkbox" name="remember" --}}
    {{--                                               id="remember" {{ old('remember') ? 'checked' : '' }}> --}}

    {{--                                        <label class="form-check-label" for="remember"> --}}
    {{--                                            {{ __('Remember Me') }} --}}
    {{--                                        </label> --}}
    {{--                                    </div> --}}
    {{--                                </div> --}}
    {{--                            </div> --}}

    {{--                            <div class="row mb-0"> --}}
    {{--                                <div class="col-md-8 offset-md-4"> --}}
    {{--                                    <button type="submit" class="btn btn-primary"> --}}
    {{--                                        {{ __('Login') }} --}}
    {{--                                    </button> --}}

    {{--                                    @if (Route::has('password.request')) --}}
    {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}"> --}}
    {{--                                            {{ __('Forgot Your Password?') }} --}}
    {{--                                        </a> --}}
    {{--                                    @endif --}}
    {{--                                </div> --}}
    {{--                            </div> --}}
    {{--                        </form> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </div> --}}
    <section class="contact__area pt-100 pb-60">
        <div class="container">
            @include('messages')
            <div class="row wow fadeInUp mt-50" data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-lg-6">
                    <div class="contact__info-wrapper mb-30">
                        <div class="section__title-one mb-20">
                            <h3 class="mb-20">{{ __('pages.login') }}</h3>
                            <h2>{{ __('pages.loginAsAdministrator') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form bd-ud-contact-form mb-60">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact__from-input">
                                        <input id="email" type="email" placeholder="{{ __('inputs.email') . ' *' }}"
                                            class="mb-1 @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact__from-input">
                                        <input id="password" type="password" placeholder="{{ __('inputs.password') . ' *' }}"
                                            class="mt-2 @error('password') is-invalid @enderror" name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-40 mt-10">
                                        <input class="form-check-input remember-me-checkbox" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="ms-2 ps-1 text-muted" for="remember">
                                            {{ __('buttons.rememberMe') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="comment__btn e-btn" type="submit">{{ __('buttons.login') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .remember-me-checkbox {
            width: 21px;
            height: 21px;
            border-radius: 2px;
            font-weight: var(--bd-fw-black);
            line-height: 21px;
            font-size: 13px;
        }

        .remember-me-checkbox:checked {
            background: var(--clr-theme-1);
            color: var(--clr-common-white);
        }
    </style>
@endpush
