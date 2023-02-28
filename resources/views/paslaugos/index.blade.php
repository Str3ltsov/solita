@extends('layouts.app')

@section('content')
    {{--    <div class="container mt-5">--}}
    {{--        @include('messages')--}}
    {{--    </div>--}}
    {{--    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">--}}
    {{--        @if (auth()->check())--}}
    {{--            <div class="d-flex">--}}
    {{--                <a href="{{ route('editPaslaugos') }}" class="btn btn-primary px-4 py-3">--}}
    {{--                    <i class="fa-solid fa-pen-to-square me-1"></i>--}}
    {{--                    {{ __('Redaguoti Paslaugos') }}--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        <div class="mb-5 text-muted" style="line-height: 31px">--}}
    {{--            {!! $pageText->html_text !!}--}}
    {{--        </div>--}}
    {{--    </main>--}}
    <main>
        <section class="about__area pt-120 pb-60">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s"
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
                        @auth
                            <div class="banner5-btn wow fadeInUp mb-50 ms-md-3" data-wow-delay=".9s"
                                 style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                <div class="about__btn">
                                    <a class="it__btn-3 px-4" href="{{ route('editPaslaugos') }}">
                                        {{ __('Redaguoti Paslaugos') }}
                                        <span><i class="fa-solid fa-pen-to-square ms-2"></i></span>
                                    </a>
                                </div>
                            </div>
                        @endauth
                        <div class="about__right-content mb-60">
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    {!! $pageText->html_text !!}
                                </div>
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
