@extends('layout.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Prideti bloka') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">{{ __('Pagrindinis') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('puslapiai.index') }}">{{ __('Puslapiai') }}</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('puslapiai.edit', $page->id) }}">{{ __('Redaguoti') . ' ' . $page->name }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Prideti bloka') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('messages')
            @include('admin.pages.forms.add_block_form')
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
