@extends('layout.app')

@section('content')
    <div class="container mt-5">
        @include('messages')
    </div>
    <main class="container d-flex flex-column justify-content-center gap-3" style="min-height: 70vh">
        @include('es_projektai.form')
    </main>
@endsection
