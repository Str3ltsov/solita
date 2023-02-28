@extends('layout.app')

@section('content')
{{--    <div class="container mt-5">--}}
{{--        @include('messages')--}}
{{--    </div>--}}
{{--    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">--}}
{{--        @include('kontaktai.forms.edit_form')--}}
{{--    </main>--}}
<section class="contact__area pt-120 pb-60">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <div class="col-lg-6">
                <div class="contact__info-wrapper mb-30">
                    @include('kontaktai.forms.edit_form')
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
