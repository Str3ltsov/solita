@extends('layout.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Redaguoti') . ' ' . $page->name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">{{ __('Pagrindinis') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('puslapiai.index') }}">{{ __('Puslapiai') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Redaguoti') . ' ' . $page->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('messages')
            @if ($page->id != 1)
                @include('admin.pages.forms.update_page_form')
            @endif
            @if ($page->id == 1)
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title mt-2">{{ __('Blokai') }}</h3>
                        <a href="{{ route('addBlock', $page->id) }}" class="btn btn-primary float-right">
                            {{ __('Prideti bloka') }}
                        </a>
                    </div>
                    <div class="card-body">
                        @include('admin.pages.tables.block_table')
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {})
            .catch(error => console.error(error));
    </script>
@endpush
