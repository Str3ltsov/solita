@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('messages')
    </div>
    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">
        @if (auth()->check())
            <div class="d-flex">
                <a href="{{ route('editKontaktai') }}" class="btn btn-primary px-4 py-3">
                    <i class="fa-solid fa-pen-to-square me-1"></i>
                    {{ __('Redaguoti Kontaktus') }}
                </a>
            </div>
        @endif
        <div class="mb-5 text-muted d-flex flex-column flex-md-row justify-content-md-between col-12 gap-5 gap-md-2"
             style="line-height: calc(31px - 4px)">
            <div class="d-flex flex-column">
                {!! $pageText->html_text !!}
            </div>
            @include('kontaktai.forms.contact_form')
        </div>
    </main>
@endsection
