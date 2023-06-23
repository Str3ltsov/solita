@extends('layout.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('pages.editContact') . ' ' . $contact->title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">{{ __('pages.main') }}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('kontaktai.index') }}">{{ __('pages.contacts') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('pages.editContact') . ' ' . $contact->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @include('messages')
            @include('admin.contacts.update_form')
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
