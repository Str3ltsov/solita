@extends('layout.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('pages.editPage') . ' ' . $page->name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">{{ __('pages.main') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('puslapiai.index') }}">{{ __('pages.pages') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('pages.editPage') . ' ' . $page->name }}</li>
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
                        <h3 class="card-title mt-2">{{ __('pages.blocks') }}</h3>
                        <a href="{{ route('addBlock', $page->id) }}" class="btn btn-primary float-right">
                            {{ __('pages.addBlock') }}
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
            .create(document.querySelector('#editor_lt'), {})
            .catch(error => console.error(error));
        ClassicEditor
            .create(document.querySelector('#editor_en'), {})
            .catch(error => console.error(error));    
    </script>
@endpush
