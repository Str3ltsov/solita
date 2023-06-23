@extends('layout.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('pages.createPage') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">{{ __('pages.main') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('puslapiai.index') }}">{{ __('pages.pages') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('pages.createPage') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('messages')
            @include('admin.pages.forms.add_page_form')
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor_lt'), {})
            .catch(error => console.error(error));
        ClassicEditor
            .create(document.querySelector('#editor_en'), {})
            .catch(error => console.error(error));    
    </script>
@endpush
