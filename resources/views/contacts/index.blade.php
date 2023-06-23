@extends('layout.app')

@section('content')
    <section class="contact__area pt-100 pb-60">
        <div class="container">
            @include('messages')
            <div class="row wow fadeInUp mt-50" data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-lg-6">
                    <div class="contact__info-wrapper mb-30">
                        <div class="section__title-one mb-20">
                            <span>// {{ __('pages.contactUs') }}</span>
                            <h2>{{ __('pages.contacts') }}</h2>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[0]->title }}</span>
                                <h5>{{ $contacts[0]->description }}</h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[1]->title }}</span>
                                <h5>{{ $contacts[1]->description }}</h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[2]->title }}</span>
                                <h5><a
                                        href="tel:{{ implode(explode(' ', $contacts[2]->description)) }}">{{ $contacts[2]->description }}</a>
                                </h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[3]->title }}</span>
                                <h5><a href="mailto:{{ $contacts[3]->description }}">{{ $contacts[3]->description }}</a>
                                </h5>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact__info-content">
                                <span>{{ $contacts[4]->title }}</span>
                                <h5><a target="_blank"
                                        href="https://www.google.com/maps/place/Taikos+pr.+88A,+51182+Kaunas/data=!4m2!3m1!1s0x46e71844c01926cf:0xa2937b6d3b4e5c5?sa=X&ved=2ahUKEwjQzrypv7X9AhVLw4sKHd-WDTUQ8gF6BAgUEAI">{{ $contacts[4]->description }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__form bd-ud-contact-form mb-60">
                        @include('contacts.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
