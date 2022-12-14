@extends('layouts.app')

@section('content')
    <div class="page-navigation">
        <div class="container">
            <a href="{{ url('/') }}">
                {{ __('menu.home') }}
            </a>
            <i class="fa-solid fa-angle-right"></i>
            <span>
                {{ __('menu.profile') ?? '' }}
            </span>
        </div>
    </div>
    <div class="container">
        @include('messages')
    </div>
    <div class="container">
        <div class="mb-4 mt-5 d-flex justify-content-between align-items-center">
            <h3 class="mb-0" style="font-family: 'Times New Roman', sans-serif">{{__('menu.profile')}}</h3>
            {!! Form::model($user, ['route' => ['deleteAccount', $prefix], 'method' => 'patch']) !!}
                <button type="submit" class="category-return-button" data-loading-text="Loading..."
                        title="{{ __('names.accountDeletion') }}" onclick="return confirm('{{ __('messages.areYouSureAccountDeletion') }}')">
                    {{ __('names.accountDeletion') }}
                </button>
            {!! Form::close() !!}
        </div>
            <div class="col bg-white py-3 px-4">
                <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                    <ul class="nav nav-tabs justify-content-start mb-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active py-2 px-3" href="#profile" data-bs-toggle="tab" aria-selected="true" role="tab">
                                {{ __('menu.userInfo') }}
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-reviews py-2 px-3" href="#password" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                                {{ __('auth.passwordEnter') }}
                            </a>
                        </li>
                        @if (Auth::user()->type == 2)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link nav-link-reviews py-2 px-3" href="#skills" data-bs-toggle="tab" aria-selected="false" tabindex="-2" role="tab" id="skillsTab">
                                    {{ __('names.skills') }}
                                </a>
                            </li>
                        @endif
                    </ul>
                    <div class="tab-content p-0">
                        <div class="tab-pane px-0 active" id="profile" role="tabpanel">
                            <div class="auth-form">
                                    {!! Form::model($user, ['route' => ['userprofilesave', $prefix], 'method' => 'patch', 'class' => 'auth-form-container px-0']) !!}
                                        <div class="row">
                                            <input type="hidden" name="type" value="{{ $user->type }}">
                                            <div class="form-group col-md-6 col-sm-12 mb-2">
                                                {!! Form::label('code', __('forms.name') )!!}
                                                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 mb-2">
                                                {!! Form::label('email', __('forms.email')) !!}
                                                {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 mb-2">
                                                {!! Form::label('street', __('forms.street')) !!}
                                                {!! Form::text('street', $user->street, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 mb-2">
                                                {!! Form::label('house_flat', __('forms.house_flat')) !!}
                                                {!! Form::text('house_flat', $user->house_flat, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group col-md-3 col-sm-6 mb-2">
                                                {!! Form::label('post_index', __('forms.post_index')) !!}
                                                {!! Form::text('post_index', $user->post_index, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 mb-2">
                                                {!! Form::label('city', __('forms.city')) !!}
                                                {!! Form::text('city', $user->city, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group col-md-6 col-sm-12 mb-2">
                                                {!! Form::label('phone_number', __('forms.phone_number')) !!}
                                                {!! Form::text('phone_number', $user->phone_number, ['class' => 'form-control']) !!}
                                            </div>
                                            @if (Auth::user()->type == 2 || Auth::user()->type == 3)
                                                <div class="form-group col-12">
                                                    {!! Form::label('work_info', __('forms.work_info')) !!}
                                                    {!! Form::textarea('work_info', $user->work_info, ['class' => 'form-control', 'rows' => 4]) !!}
                                                </div>
                                            @endif
                                            <div class="d-flex justify-content-center mt-4">
                                                <button type="submit" class="col-12 col-md-4 py-2 auth-button" data-loading-text="Loading...">
                                                    {{ __('buttons.save') }}
                                                </button>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        <div class="tab-pane px-0" id="password" role="tabpanel">
                            <div class="auth-form">
                                @include('user_views.user.change_password')
                            </div>
                        </div>
                        @if (count($skills) > 0)
                            @if (Auth::user()->type == 2)
                                <div class="tab-pane px-0" id="skills" role="tabpanel">
                                    <div class="auth-form">
                                        @include('user_views.user.add_skills')
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
    </div>
@endsection

@push('scripts')
    <script>
        const skills = document.getElementById('skillsTab');

        skills.addEventListener('click', () =>
            {{ count($skills) }} === 0 && alert('{{ __('messages.infoAddSkill') }}.'));
    </script>
@endpush
