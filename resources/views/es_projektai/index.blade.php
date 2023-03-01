@extends('layout.app')

@section('content')
    {{--    <div class="container mt-5">--}}
    {{--        @include('messages')--}}
    {{--    </div>--}}
    {{--    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">--}}
    {{--        @if (auth()->check())--}}
    {{--            <div class="d-flex">--}}
    {{--                <a href="{{ route('editEsProjektai') }}" class="btn btn-primary px-4 py-3">--}}
    {{--                    <i class="fa-solid fa-pen-to-square me-1"></i>--}}
    {{--                    {{ __('Redaguoti ES Projektus') }}--}}
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
                                <img src="{{ asset('images/es_projektai.png') }}" alt="es_projektai">
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

