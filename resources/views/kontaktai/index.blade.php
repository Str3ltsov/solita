@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('messages')
    </div>
    <main class="container d-flex align-items-center" style="min-height: 70vh">
        <div class="mb-5 text-muted d-flex flex-column flex-md-row justify-content-md-between col-12 gap-5 gap-md-2" style="line-height: calc(31px - 4px)">
            <div class="d-flex flex-column gap-1">
                <span>UAB "Solita"</span>
                <span>Įmonės kodas 304764201</span>
                <span>PVM mokėtojo kodas LT100011832719</span>
                <span>Adresas: Taikos pr. 88a, 51182 Kaunas</span>
                <span>El. paštas: <a href="mailto:info@solita.lt">info@solita.lt</a></span>
                <span>Tel.: +370 372 47749</span>
            </div>
            @include('kontaktai.form')
        </div>
    </main>
@endsection
