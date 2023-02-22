@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('messages')
    </div>
    <main class="container d-flex align-items-center" style="min-height: 70vh">
        <div class="mb-5 text-muted" style="line-height: 31px">
            @foreach($pageTexts as $pageText)
                {!! $pageText->html_text !!}
            @endforeach
        </div>
    </main>
@endsection
