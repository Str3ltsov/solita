@extends('layout.app')

@section('content')
    <main>
        <div class="banner5-area pos-rel fix bg-css" data-background="assets/img/hero/globe-bg.jpg"
            style="background-image: url(&quot;assets/img/hero/globe-bg.jpg&quot;);">
            <div class="slider5-height d-flex align-items-center">
                <div class="et-tsparticles">
                    <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"
                            width="3840" height="1620"></canvas></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="p-relative">
                                <h2 class="banner5-title mb-25 wow fadeInUp" data-wow-delay=".5s"
                                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    {{ __('pages.mainTitle') }}
                                </h2>
                                <!--<div class="banner5-text wow fadeInUp mb-115" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                                        <p>UAB "Solita" yra start-up tipo įmonė ir veiklą vysto nuo 2018 metų pradžios. Pagrindinė įmonės veikla – IT sprendimų vystymas ir pardavimas. </p>
                                                    </div>-->
                                <div class="banner5-btn wow fadeInUp" data-wow-delay=".9s"
                                    style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                    <div class="et-btn-5">
                                        <a href="{{ url('/pages/paslaugos') }}">{{ __('buttons.services') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('main.blocks')
        <section class="et-artificial p-relative fix bg-css pt-120" data-background="assets/img/bg/artificial-bg.png"
            style="background-image: url('assets/img/bg/artificial-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="et-artificial-content wow fadeInUp" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="section-intro mb-60">
                                <h2 class="section-title white-color">{{ __('pages.blockTitle') }}</h2>
                            </div>
                            <p>{{ __('pages.blockParagraph1') }}
                                <br>{{ __('pages.blockParagraph2') }}</br>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="et-artificial-img-wrap p-absolute d-none d-xl-block">
                            <div class="et-artificial-shape et-artificial-shape-1 p-absolute">
                                <img src="assets/img/artificial/artificial-shape-1.png" alt="artificial">
                            </div>
                            <div class="et-artificial-shape et-artificial-shape-2 p-absolute">
                                <img src="assets/img/artificial/artificial-shape-2.png" alt="artificial">
                            </div>
                            <div class="et-artificial-img w-img">
                                <img src="assets/img/artificial/call_center.jpg" alt="artificial">
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
