@extends('layout.app')

@section('content')
    <main>
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
    </main>
@endsection

@push('scripts')
    <script>
        const h4 = document.querySelector('.about__description-text').querySelector('h4')

        h4.classList.add('pb-10')
    </script>
@endpush
