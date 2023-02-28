@extends('layouts.app')

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
                    @auth
                        <div class="banner5-btn wow fadeInUp mb-50" data-wow-delay=".9s"
                             style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                            <div class="about__btn">
                                <a class="it__btn-3 px-4" href="{{ route('editKontaktai') }}">
                                    {{ __('Redaguoti Kontaktai') }}
                                    <span><i class="fa-solid fa-pen-to-square ms-2"></i></span>
                                </a>
                            </div>
                        </div>
                    @endauth
                    <div class="contact__info-wrapper mb-30">
                        {!! $pageText->html_text !!}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form bd-ud-contact-form mb-60">
                        @include('kontaktai.forms.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
