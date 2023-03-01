@extends('layout.app')

@section('content')
    {{--    <div class="container mt-5">--}}
    {{--        @include('messages')--}}
    {{--    </div>--}}
    {{--    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">--}}
    {{--        @if (auth()->check())--}}
    {{--            <div class="d-flex">--}}
    {{--                <a href="{{ route('editApieMus') }}" class="btn btn-primary px-4 py-3">--}}
    {{--                    <i class="fa-solid fa-pen-to-square me-1"></i>--}}
    {{--                    {{ __('Redaguoti Apie Mus ') }}--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        <div class="mb-5 text-muted">--}}
    {{--            {!! $pageText->html_text !!}--}}
    {{--        </div>--}}
    {{--    </main>--}}
    <main>
        <div class="banner5-area pos-rel fix bg-css" data-background="{{ asset('assets/img/hero/globe-bg.jpg') }}"
             style="background-image: url(&quot;assets/img/hero/globe-bg.jpg&quot;);">
            <div class="slider5-height d-flex align-items-center">
                {{--                <div class="banner5-social-link p-absolute d-none d-md-block">--}}
                {{--                    <a href="#">Twitter</a>--}}
                {{--                    <a href="#">YouTube</a>--}}
                {{--                    <a href="#">Facebook</a>--}}
                {{--                    <a href="#">Instagram</a>--}}
                {{--                </div>--}}
                <div class="et-tsparticles">
                    <div id="particles-js">
                        <canvas class="particles-js-canvas-el" width="2310" height="1800"
                                style="width: 100%; height: 100%;"></canvas>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <div class="banner5-content p-relative">
                                <div class="banner5-shape p-absolute d-none d-xxl-block">
                                    <img src="{{ asset('assets/img/hero/hero-shape-2.png') }}" alt="img">
                                </div>
                                <h2 class="banner5-title mb-25 wow fadeInUp" data-wow-delay=".5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Data
                                    Science &amp; AI Consulting Company</h2>
                                <div class="banner5-text wow fadeInUp mb-115" data-wow-delay=".7s"
                                     style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <p>Because we have 220+ technology talents that can assist you with product
                                        development at any stage of the project. Explore our case studies to discover
                                        how our partnerships of 4 months to 5 years made businesses in 24 countries
                                        .</p>
                                </div>
                                <div class="banner5-btn wow fadeInUp" data-wow-delay=".9s"
                                     style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                    <div class="et-btn-5">
                                        <a href="{{ route('paslaugos') }}">{{ $pages[\App\Enums\PageEnum::PASLAUGOS] }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about__area pt-120 pb-60">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-5 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset('assets/img/about/about-01.jpg') }}" alt="about-img">
                            </div>
                            <div class="about__experience-shape">
                                <div class="about__experience-content">
                                    <h2>30</h2>
                                    <span>Year Experience</span>
                                    <div class="about__experience-shape-icon">
                                        <i class="fal fa-trophy-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="about__description-text">
                                {!! $pageText->html_text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        const h4 = document.querySelector('.about__description-text').querySelector('h4')

        h4.classList.add('pb-10')
    </script>
@endpush
