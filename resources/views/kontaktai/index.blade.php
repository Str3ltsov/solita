@extends('layout.app')

@section('content')
    {{--    <div class="container mt-5">--}}
    {{--        @include('messages')--}}
    {{--    </div>--}}
    {{--    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">--}}
    {{--        @if (auth()->check())--}}
    {{--            <div class="d-flex">--}}
    {{--                <a href="{{ route('editKontaktai') }}" class="btn btn-primary px-4 py-3">--}}
    {{--                    <i class="fa-solid fa-pen-to-square me-1"></i>--}}
    {{--                    {{ __('Redaguoti Kontaktus') }}--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        <div class="mb-5 text-muted d-flex flex-column flex-md-row justify-content-md-between col-12 gap-5 gap-md-2"--}}
    {{--             style="line-height: calc(31px - 4px)">--}}
    {{--            <div class="d-flex flex-column">--}}
    {{--                {!! $pageText->html_text !!}--}}
    {{--            </div>--}}
    {{--            @include('kontaktai.forms.contact_form')--}}
    {{--        </div>--}}
    {{--    </main>--}}
    <section class="contact__area pt-100 pb-60">
        <div class="container">
            @include('messages')
            <div class="row wow fadeInUp mt-50" data-wow-delay=".3s"
                 style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-lg-6">
                    <div class="contact__info-wrapper mb-30">
                        <div class="section__title-one mb-20">
                            <span>// Susisiekite su mumis</span>
                            <h2>Kontaktai</h2>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>Įmonės kodas</span>
                                <h5>304764201</h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>PVM mokėtojo kodas</span>
                                <h5>LT100011832719</h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>Telefonas</span>
                                <h5><a href="tel:+37037247749">+370 372 47749</a></h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>El. paštas</span>
                                <h5><a href="mailto:info@solita.lt">info@solita.lt</a></h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>Adresas</span>
                                <h5><a target="_blank" href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">Taikos pr. 88a, 51182 Kaunas</a></h5>
                            </div>
                        </div>
                        {!! $pageText->html_text !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form bd-ud-contact-form mb-60">
                        @include('kontaktai.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
