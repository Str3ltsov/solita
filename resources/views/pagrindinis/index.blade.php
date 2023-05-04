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
                        <div class="col-lg-12 col-md-12">
                            <div class="p-relative">
                                <h2 class="banner5-title mb-25 wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Individualios programinės įrangos kūrimas ir IT ekspertai jūsų verslui</h2>
                                <!--<div class="banner5-text wow fadeInUp mb-115" data-wow-delay=".7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                                    <p>UAB "Solita" yra start-up tipo įmonė ir veiklą vysto nuo 2018 metų pradžios. Pagrindinė įmonės veikla – IT sprendimų vystymas ir pardavimas. </p>
                                </div>-->
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
                                <img src="{{ asset('images/paslaugos.jpg') }}" alt="Paslaugos">
                            </div>
                            <div class="about__experience-shape">
                                <div class="about__experience-content">
                                    <h2>5</h2>
                                    <span>metų patiritis</span>
                                    <div class="about__experience-shape-icon">
                                        <i class="fal fa-trophy-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// Apie mus</span>
                                <h2>Įmonės misija</h2>
                            </div>
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
        <section class="skill__area skill__bg pt-120 pb-60" data-background="assets/img/bg/skill-map.png" data-wow-delay=".3s" style="background-image: url(&quot;assets/img/bg/skill-map.png&quot;);">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill-progress mb-60">
                            <div class="section__title-one s-3 mb-40">
                                <span>// Paslaugos</span>
                                <h2>Įmonės veiklos sritys</h2>
                            </div>
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    <ul>
                                        <li>Atlieka duomenų analizės ir apdorojimo darbus;</li>
                                        <li>Vykdo sistemų architektūros kūrimo ir projektavimo darbus;</li>
                                        <li>Analizuoja sistemų veikimą, atlieka vertinimo ir analizės metodų parinkimą;</li>
                                        <li>Vykdo programavimo, duomenų analizės, atpažinimo algoritmų kūrimo, jų testavimo ir kalibravimo darbus;</li>
                                        <li>Vysto šnekos atpažinimo ir analizės sprendimus;</li>
                                        <li>Kuria ir diegia turinio, klientų, verslo valdymo sistemas, konsultuoja, apmoko dirbti su sistemomis;</li>
                                        <li>Atlieka mokslinės, eksperimentinės ir technologinės plėtros tyrimus.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill__image-wrapper mb-60">
                            <div class="skill__image pl-25 p-relative w-img">
                                <img src="assets/img/skill/paslaugos.jpg" alt="Paslaugos">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="et-artificial p-relative fix bg-css pt-120" data-background="assets/img/bg/artificial-bg.png" style="background-image: url('assets/img/bg/artificial-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="et-artificial-content wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="section-intro mb-60">
                                <h2 class="section-title white-color">Skambučių atpažinimo ir analizės sistema</h2>
                            </div>
                            <p>Įmonė yra sukurusi skambučių atpažinimo ir analizės sistemą CTAS (Calls Transcription and Analysis System). Sistema skirta atpažinti telefoninius pokalbius bei juos interpretuoti, pateikiant galutiniam vartotojui skambučių klasifikaciją pagal temas ar darbuotojų įtaką kliento pasitenkinimui.
                            <br>Sistemos inovatyvumas ir unikalumas – balso atpažinimas telefoninių pokalbių metu, kalbų identifikavimas, teksto analizė ir informacijos įvertinimas. Sistema pagrįsta balso atpažinimo ir garsinės informacijos semantizavimo technologijomis, sudėtingais matematiniais algoritmais, dirbtinio intelekto metodais, teksto klasterizavimo ir klasifikavimo metodais.</br>
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

