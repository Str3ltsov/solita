<form method="POST" action="{{ route('editBlockSave', [$page->id, $block->id]) }}" class="card card-default"
    enctype="multipart/form-data" files="true">
    @csrf
    @method('PUT')
    <div class="card-header">
        <h3 class="card-title">{{ __('pages.editBlock') . ' ' . $block->name }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach (config('translatable.locales') as $locale)
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>{{ __('inputs.name').' '.strtoupper($locale) }}</label>
                        <input type="text" name="{{ 'name_'.$locale }}" value="{{ $block->translate($locale)->name }}" 
                            class="form-control mb-1 @error("name_$locale") is-invalid @enderror">
                        @error("name_$locale")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endforeach
            @foreach (config('translatable.locales') as $locale)
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>{{ __('inputs.title').' '.strtoupper($locale) }}</label>
                        <input type="text" name="{{ 'title_'.$locale }}" value="{{ $block->translate($locale)->title }}"
                            class="form-control mb-1 @error("title_$locale") is-invalid @enderror">
                        @error("title_$locale")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endforeach
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('inputs.blockType') }}</label>
                    <select class="custom-select rounded-0 @error('block_type_id') is-invalid @enderror"
                        id="block_type_id" name="block_type_id">
                        @foreach ($blockTypes as $key => $blockType)
                            <option value="{{ $key }}" @if ($key == $block->block_type_id) selected @endif>
                                {{ __('options.' . strtolower($blockType)) }}
                            </option>
                        @endforeach
                    </select>
                    @error('block_type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('inputs.showExperience') }}</label>
                    <select class="custom-select rounded-0 @error('show_experience') is-invalid @enderror"
                        id="show_experience" name="show_experience">
                        <option value="0" @if ($block->show_experience == 0) selected @endif>{{ __('options.no') }}
                        </option>
                        <option value="1" @if ($block->show_experience == 1) selected @endif>{{ __('options.yes') }}
                        </option>
                    </select>
                    @error('show_experience')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('inputs.experienceYears') }}</label>
                    <input type="number" name="experience_years"
                        class="form-control mb-1 @error('experience_years') is-invalid @enderror" min="1"
                        value="{{ $block->experience_years ? $block->experience_years : null }}">
                    @error('experience_years')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('inputs.order') }}</label>
                    <input type="number" name="order" class="form-control mb-1 @error('order') is-invalid @enderror"
                        min="1" value="{{ $block->order }}">
                    @error('order')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (config('translatable.locales') as $locale)
                <div class="col-12">
                    <div class="form-group">
                        <label>{{ __('inputs.text').' '.strtoupper($locale) }}</label>
                        <textarea class="form-control text-muted @error("text_$locale") is-invalid @enderror" name="{{ 'text_'.$locale }}" id="{{ 'editor_'.$locale }}">
                            {!! $block->translate($locale)->text !!}
                        </textarea>
                        @error("text_$locale")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('buttons.updateAndSave') }}</button>
        <a href="{{ route('puslapiai.edit', $page->id) }}"
            class="btn btn-secondary">{{ __('buttons.returnBack') }}</a>
    </div>
</form>
