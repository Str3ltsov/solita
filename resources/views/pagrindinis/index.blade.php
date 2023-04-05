@extends('layout.app')

@section('content')
    <main>
        <div class="banner5-area pos-rel fix bg-css" data-background="assets/img/hero/globe-bg.jpg" style="background-image: url(&quot;assets/img/hero/globe-bg.jpg&quot;);">
            <div class="slider5-height d-flex align-items-center">
                <div class="et-tsparticles">
                    <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="3840" height="1620"></canvas></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <div class="banner5-content p-relative">
                                <h2 class="banner5-title mb-25 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">IT sprendimų vystymas ir pardavimas</h2>
                                <div class="banner5-text wow fadeInUp mb-115" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <p>UAB "Solita" yra start-up tipo įmonė ir veiklą vysto nuo 2018 metų pradžios. Pagrindinė įmonės veikla – IT sprendimų vystymas ir pardavimas. </p>
                                </div>
                                <div class="banner5-btn wow fadeInUp" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                                    <div class="et-btn-5">
                                        <a href="{{ url("/paslaugos") }}">Paslaugos</a>
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
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-5 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset('images/es_projektai.png') }}" alt="es_projektai">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// Projektai</span>
                                <h2>ES projektai</h2>
                            </div>
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

