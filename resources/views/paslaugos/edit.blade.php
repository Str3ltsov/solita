@extends('layout.app')

@section('content')
{{--    <div class="container mt-5">--}}
{{--        @include('messages')--}}
{{--    </div>--}}
{{--    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">--}}
{{--        @include('paslaugos.form')--}}
{{--    </main>--}}
    <main>
        <section class="about__area pt-120 pb-60">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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
                                <div class="bd-ud-app-check-list mb-25">
                                    @include('paslaugos.form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
