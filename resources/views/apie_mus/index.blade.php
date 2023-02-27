@extends('layout.app')

@section('content')
    <div class="container mt-5">
        @include('messages')
    </div>
    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">
        @if (auth()->check())
            <div class="d-flex">
                <a href="{{ route('editApieMus') }}" class="btn btn-primary px-4 py-3">
                    <i class="fa-solid fa-pen-to-square me-1"></i>
                    {{ __('Redaguoti Apie Mus ') }}
                </a>
            </div>
        @endif
        <div class="mb-5 text-muted">
            {!! $pageText->html_text !!}
        </div>
    </main>
@endsection
