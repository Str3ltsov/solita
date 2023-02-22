@extends('layouts.app')

@section('content')
    <main class="container d-flex align-items-center" style="min-height: 70vh">
        <div class="my-5 text-muted" style="line-height: 31px">
            @foreach($pageTexts as $pageText)
                {!! $pageText->html_text !!}
            @endforeach
        </div>
    </main>
@endsection
