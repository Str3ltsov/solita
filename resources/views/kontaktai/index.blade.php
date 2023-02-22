@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('messages')
    </div>
    <main class="container d-flex align-items-center" style="min-height: 70vh">
        <div class="mb-5 text-muted d-flex flex-column flex-md-row justify-content-md-between col-12 gap-5 gap-md-2" style="line-height: calc(31px - 4px)">
            <div class="d-flex flex-column gap-1">
                @foreach($pageTexts as $pageText)
                    {!! $pageText->html_text !!}
                @endforeach
            </div>
            @include('kontaktai.form')
        </div>
    </main>
@endsection
