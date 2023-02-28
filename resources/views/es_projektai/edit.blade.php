@extends('layout.app')

@section('content')
    <main>
        <section class="about__area pt-120 pb-60">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-4 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset('images/es_projektai.png') }}" alt="es_projektai">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="about__description-text">
                                @include('es_projektai.form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
