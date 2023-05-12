<form method="POST" action="{{ route('addBlockSave', $page->id) }}" class="card card-default" enctype="multipart/form-data"
    files="true">
    @csrf
    <div class="card-header">
        <h3 class="card-title">{{ __('Prideti bloka') }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="form-group">
                    <label>{{ __('Pavadinimas') }}</label>
                    <input type="text" name="name" class="form-control mb-1 @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group">
                    <label>{{ __('Titulas') }}</label>
                    <input type="text" name="title" class="form-control mb-1 @error('title') is-invalid @enderror">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">{{ __('Nuotrauka') }}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror"
                                id="image" name="image">
                            <label class="custom-file-label" for="image">{{ __('Pasirinkti failą') }}</label>
                        </div>
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('Bloko tipas') }}</label>
                    <select class="custom-select rounded-0 @error('block_type_id') is-invalid @enderror"
                        id="block_type_id" name="block_type_id">
                        @foreach ($blockTypes as $key => $blockType)
                            <option value="{{ $key }}">{{ __($blockType) }}</option>
                        @endforeach
                    </select>
                    @error('block_type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('Rodyti patirtį') }}</label>
                    <select class="custom-select rounded-0 @error('show_experience') is-invalid @enderror"
                        id="show_experience" name="show_experience">
                        <option value="0">{{ __('Ne') }}
                        </option>
                        <option value="1">{{ __('Taip') }}
                        </option>
                    </select>
                    @error('show_experience')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('Patirties Metai') }}</label>
                    <input type="number" name="experience_years"
                        class="form-control mb-1 @error('experience_years') is-invalid @enderror" min="1">
                    @error('experience_years')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
                <div class="form-group">
                    <label>{{ __('Tvarka') }}</label>
                    <input type="number" name="order" class="form-control mb-1 @error('order') is-invalid @enderror"
                        value="1" min="1">
                    @error('order')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>{{ __('Tekstas') }}</label>
                    <textarea class="form-control text-muted @error('text') is-invalid @enderror" name="text" id="editor">
                    </textarea>
                    @error('text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ __('Sukurti ir išsaugoti') }}</button>
        <a href="{{ route('puslapiai.edit', $page->id) }}" class="btn btn-secondary">{{ __('Grįžti atgal') }}</a>
    </div>
</form>
