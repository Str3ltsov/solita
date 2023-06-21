<form method="POST" action="{{ route('puslapiai.update', $page->id) }}" class="card card-default"
    enctype="multipart/form-data" files="true">
    @csrf
    @method('PUT')
    <div class="card-header">
        <h3 class="card-title">{{ __('pages.editPage') . ' ' . $page->name }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group">
                    <label>{{ __('inputs.name') }}</label>
                    <input type="text" name="name" class="form-control mb-1 @error('name') is-invalid @enderror"
                        value="{{ $page->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @if ($page->route !== '')
                <div class="col-xl-4 col-md-6">
                    <div class="form-group">
                        <label>{{ __('inputs.route') }}</label>
                        <input type="text" name="route"
                            class="form-control mb-1 @error('route') is-invalid @enderror" value="{{ $page->route }}">
                        @error('route')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group">
                        <label>{{ __('inputs.title') }}</label>
                        <input type="text" name="title"
                            class="form-control mb-1 @error('title') is-invalid @enderror" value="{{ $page->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile">{{ __('inputs.image') }}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror"
                                    id="image" name="image">
                                <label class="custom-file-label" for="image">{{ __('options.selectFile') }}</label>
                            </div>
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-6">
                    <div class="form-group">
                        <label>{{ __('inputs.showExperience') }}</label>
                        <select class="custom-select rounded-0 @error('show_experience') is-invalid @enderror"
                            id="show_experience" name="show_experience">
                            <option value="0" @if ($page->show_experience == 0) selected @endif>{{ __('options.no') }}
                            </option>
                            <option value="1" @if ($page->show_experience == 1) selected @endif>{{ __('options.yes') }}
                            </option>
                        </select>
                        @error('show_experience')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-6">
                    <div class="form-group">
                        <label>{{ __('inputs.experienceYears') }}</label>
                        <input type="number" name="experience_years"
                            class="form-control mb-1 @error('experience_years') is-invalid @enderror"
                            value="{{ $page->experience_years }}">
                        @error('experience_years')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endif
        </div>
        @if ($page->route !== '')
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label>{{ __('inputs.text') }}</label>
                        <textarea class="form-control text-muted @error('text') is-invalid @enderror" name="text" id="editor">
                            {!! $page->text !!}
                        </textarea>
                        @error('text')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('buttons.updateAndSave') }}</button>
        <a href="{{ route('puslapiai.index') }}" class="btn btn-secondary">{{ __('buttons.returnBack') }}</a>
    </div>
</form>
